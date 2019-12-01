<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AccountController extends BaseController
{

    public function login()
    {
        return view('login');
    }
}
