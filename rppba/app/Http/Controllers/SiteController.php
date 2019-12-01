<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class SiteController extends BaseController
{

    public function home()
    {
        return view('home');
    }
}
