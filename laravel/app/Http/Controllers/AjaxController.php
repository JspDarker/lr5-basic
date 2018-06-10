<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

}
