<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\CustomersModel;
use App\Models\TouristicplaceModel;

class Cliente extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'Agregar Dashboard Turistico',
            'company' => 'TripApp',
            'is_logged' => true,
            'username' => user()->username,
        ];

        if ($data['username'] == 'admin' || $data['username'] == 'admin2') {
            //cargamos toda la informacion de los usuarios
            $userModel = new UserModel();
            $data['users'] = $userModel->get_all_data();
            $data['listClientes'] = $this->ListClientes();

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

    private function ListClientes()
    {
        $CustomersModel = new CustomersModel();
        $data = $CustomersModel->findAll();
        // return json_encode($data);
        return $data;
    }
}
