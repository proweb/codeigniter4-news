<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title']   = 'Казанский федеральный университет';
        $data['description']   = 'Официальный сайт Казанского федерального университета';
        return view(
            'home', // View name
            $data, // Passing data
            ['cache' => 60] // Cache time
        );
    }
}
