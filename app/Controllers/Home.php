<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome To The Jungle'
        ];

        return view('home', $data);
    }
}
