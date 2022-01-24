<?php

namespace App\Controllers;

class Dashboard extends BaseController
{  

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['company'] = 'TripApp';
        $data['is_logged'] = true;
        $data['username'] = user()->username;

        echo view('templates/is_logged/header', $data);
        echo view('pages/dashboard', $data);
        echo view('templates/is_logged/footer', $data);
    } 
}
