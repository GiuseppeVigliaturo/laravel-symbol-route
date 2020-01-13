<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function index () {
        return 'controller ciao';
    }

    public function getFirstExtendPage() {
        return view('pageextend.welcome-content');
    }

    public function getSecondtExtendPage()
    {
        return view('pageextend.welcome-content2');
    }
}
