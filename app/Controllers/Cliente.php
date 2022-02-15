<?php

namespace App\Controllers;

use App\Models\UserModel;

class Cliente extends BaseController
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['company'] = 'TripApp';
        $data['is_logged'] = true;
        $data['username'] = user()->username;


        if ($data['username'] == 'admin' || $data['username'] == 'admin2') {
            
            //cargamos toda la informacion de los usuarios
            $userModel = new UserModel();
            $data['users'] = $userModel->get_all_data();

            // Ingresa a la vista de administrador
            echo view('templates/admin_is_logged/header', $data);
            echo view('pages/cliente', $data);
            echo view('templates/admin_is_logged/footer', $data);

        } else {
            echo view('templates/is_logged/header', $data);
            echo view('pages/dashboard', $data);
            echo view('templates/is_logged/footer', $data);
        }
    }
}
