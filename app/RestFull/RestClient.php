<?php
namespace App\RestFull;
use Exception;
use App\Http\Controllers\Controller;
use App\Helpers\Common;
use Log;
class RestClientException extends Exception {}

class RestClient{

    const ERROR_CURL = 406;
    const UNAUTHOR = 401;
    public $_submitted = false;
    public $_headers = array();
    public $_body = '';
    protected $log=[];

    public function get($url, $userpw='', $headers = array(), $ca = '', $timeout = 30) {
        $ch  = curl_init($url);
        $method = "GET";
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36");
        if(is_array($headers) && count($headers) > 0){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }else{
            curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json"));
        }

        curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // disable verify ssl
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // disable verify ssl
        $this->_submitted = true;
        $this->_body = curl_exec($ch);
        $this->_headers = curl_getinfo($ch);

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
            $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if($httpcode == self::UNAUTHOR || $httpcode == 409){
                session(['auth' => '']);
                return null;
            }
            $object = collect(['code'=>0, 'msg' => $error_msg]);
            return $object;
        }

        curl_close($ch);
        return json_decode($this->_body);
    }

    public function post($url, $payload, $userpw='', $headers = array(), $ca='', $timeout = 30) {
        $ch  = curl_init($url);
        $method = "POST";
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        if(!empty($userpw)){
            $payloadString = http_build_query($payload);
        }else{
            $payloadString = json_encode($payload);
        }
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payloadString);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_COOKIESESSION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36");

        if($userpw) {
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            curl_setopt($ch, CURLOPT_USERPWD, $userpw);
        }

        if (is_array($headers) && count($headers) > 0){
            if(!empty($ca)){
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
                curl_setopt($ch, CURLOPT_CAINFO, $ca);
            }else{
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            }
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        $this->_submitted = true;
        $this->_body = curl_exec($ch);

        $this->_headers = curl_getinfo($ch);
        curl_close($ch);
        return json_decode($this->_body);
    }

    public function writeLog($data_log, $file)
    {
        Log::info($data_log);
    }
}
