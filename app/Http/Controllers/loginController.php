<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function loginn() {
        return view('form');
    }

    public function register(Request $req){
        echo "<pre>";
        print_r($req->all());
    }
    public function validform(Request $req){
        $req->validate(
            [
                // 'name' => 'required',
                'email' => 'required | email',
                'password' => 'required',
                // 'conform_password' => 'required'
                // 'password' => 'required | confirmed'
                // 'password_conformation' => 'required
            ]
            );

            echo "<pre>";
            print_r($req->all());
    }
}
