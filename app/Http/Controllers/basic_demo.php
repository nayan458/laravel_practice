<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// this is a basic controler

class basic_demo extends Controller
{
    function greet(){
        echo "Hurra! You made it";
    }

    function greet2(){
        echo "Yaaa! you made it again";
    }
};
