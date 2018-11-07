<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\RestFull\RestClient;
use Illuminate\Http\Request;
use App\Helpers\Common;
use App\Http\Controllers\V1\SystemController as SystemCTL;
use Illuminate\Support\Facades\DB;
use Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use App\Http\Requests;

class LoginController extends Controller
{

    public function getLogin() {
        $view   = 'v1.auth.login';
        return view($view, compact('system'));
    }
    public function postLogin(Request $request) {
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:8'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $email = $request->input('email');
            $password = $request->input('password');
//            $password = bcrypt($password);

//            $sql = DB::select('select * from admin');
//            $token = $sql['0']->token;

            if(Auth::attempt(['email' => $email, 'password' => $password])) {
                    $view   = 'v1.home.user';
                    $sql    = DB::select('select * from homes');
                    return view($view, compact('system', 'sql'));
            } else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }
}