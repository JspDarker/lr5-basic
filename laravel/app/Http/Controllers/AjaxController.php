<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\User;
//use Auth;


class AjaxController extends Controller
{

    public function index()
    {

    }

    public function search(Request $request)
    {
//        if ($request->ajax())
//        {
//            $res = "This is Server | ". $request->product;
//
//
//            return response($res);
//        }
        $res = "This is Server | OUT SITE". $request->product. $request->_token;
        return response($res);
    }

    public function emailRegistration(Request $request)
    {
        if ($request->ajax()) {
            $res = '';

            $email = $request->email;
            //TODO: Sql first();
            $sql = DB::table('users')->select('email')->where('email', $email)->first();

            if(count($sql) != 0) {
                $res = 'Email exists! please use email difference';
                return response($res);
            }
        }
    }

    public function emailLogin(Request $request)
    {
        if ($request->ajax()) {
            $res = '';

            $email = $request->email;
            //TODO: Sql first();
            $sql = DB::table('users')->select('email')->where('email', $email)->first();

            if(count($sql) == 0) {
                $res = 'Account invalid so Email not exists!';
                return response($res);
            }
        }
    }

}
