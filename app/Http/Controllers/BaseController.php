<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\RestFull\RestClient;

class BaseController extends Controller
{
    public function __construct(){}
    public function getAuth(){
        return session('auth');
    }
    /*
        Function Lấy menu của hệ thống
    */
    public function getMenu($id){
        try{
            $config_url = config('constant_api.link').'menu/'.$id;
            $restClient = new RestClient();
            $res = $restClient->get($config_url);
            if($res->code == 1){
                if(!empty($res->data)){
                    foreach ($res->data as $key => $rd) {
                        $rd->link = !empty($rd->url)?$rd->url:url('/').'/'.$rd->uri;
                    }
                }
                return (array) $res->data;
            }else{
                throw new Exception($res->msg);
            }
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    /*
        Function Lấy ra category của hệ thống
    */
    public function getCategory(){
        try{
            $config_url = config('constant_api.link').'category';
            $restClient = new RestClient();
            $res = $restClient->get($config_url);
            if($res->code == 1){
                return (array) $res->data;
            }else{
                throw new Exception($res->msg);
            }
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }
}