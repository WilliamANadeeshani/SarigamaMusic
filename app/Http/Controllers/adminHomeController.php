<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class adminHomeController extends Controller
{
    public function showAdminHome()
    {
//        $input = Input::only('userName', 'password');
//        $input=INPUT_GET('userName', 'password');
//        $validator = Validator::make($input,
//            array(
//                'userName' => 'required',
//                'password' => 'required',
//            )
//        );
//
//        if ($validator->fails())
//        {
//            return Redirect::to('Home/home')->with('errors', $validator->messages());
//        } else { // the validation has not failed, it has passed
//
//
//            // Send the email with the contactemail view, the user input

            return View('Home/home');


    }
}
