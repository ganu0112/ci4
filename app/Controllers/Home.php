<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        echo view('home');
        echo view('login');
        echo view('signup');
    }


}
