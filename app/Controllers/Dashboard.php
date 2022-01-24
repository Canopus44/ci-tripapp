<?php

namespace App\Controllers;
use App\Models\DepartamentsModel;

class Dashboard extends BaseController
{  
    
    public function index()
    {        
        $departamentsModel = model('App\Models\DepartamentsModel');

        $info = $departamentsModel->getInfoAPIDepartaments();

        
        $data['title'] = 'Dashboard';
        $data['company'] = 'TripApp';
        $data['is_logged'] = true;
        $data['username'] = user()->username;
        $data['departaments'] = $info;

        echo view('templates/is_logged/header', $data);
        echo view('pages/dashboard', $data);
        echo view('templates/is_logged/footer', $data);
    } 
}
