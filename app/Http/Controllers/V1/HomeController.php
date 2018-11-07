<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\BaseController;
use App\RestFull\RestClient;
use Illuminate\Http\Request;
use App\Helpers\Common;
use App\Http\Controllers\V1\SystemController as SystemCTL;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    protected $_common, $_system, $_rest_client;

    public function __construct() {
//        $this->auth = $auth;
        $this->_common      = new Common();
        $this->_system      = new SystemCTL();
        $this->_rest_client = new RestClient();
    }

    public function index()
    {
        $view   = 'v1.home.index2';
        return view($view, compact('system'));
    }

    public function dangky()
    {
        $view   = 'v1.home.dangky';
        return view($view, compact('system'));
    }
}