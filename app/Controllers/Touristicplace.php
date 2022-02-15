<?php

namespace App\Controllers;

use App\Models\DepartamentsModel;

class Touristicplace extends BaseController
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['company'] = 'TripApp';
        $data['is_logged'] = true;
        $data['username'] = user()->username;


        if ($data['username'] == 'admin' || $data['username'] == 'admin2') {
            
            // Ingresa a la vista de administrador
            echo view('templates/admin_is_logged/header', $data);
            echo view('pages/admin_dashboard', $data);
            echo view('templates/admin_is_logged/footer', $data);

        } else {
            echo view('templates/is_logged/header', $data);
            echo view('pages/dashboard', $data);
            echo view('templates/is_logged/footer', $data);
        }
    }
    
    public function insertInfo(){
        //make a controller in php that will insert the information in the database

        
    }
}
