<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\BaseController;
use App\RestFull\RestClient;
use Illuminate\Http\Request;
use App\Helpers\Common;
use App\Http\Controllers\V1\SystemController as SystemCTL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends BaseController
{
    protected $_common, $_system, $_rest_client;

    public function __construct()
    {
        $this->_common      = new Common();
        $this->_system      = new SystemCTL();
        $this->_rest_client = new RestClient();
    }

    public function addUser(Request $request)
    {
        $params = $request->all();
        if (!empty($params)) {
            $uname = $params['un'];
            $upass = $params['pww'];
            DB::table('homes')->insert([
                'taikhoan'   => $uname,
                'matkhau'    => $upass,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }

        return json_encode(['status' => 1, 'data' => 2, 'messenge' => "ok"]);
    }
}