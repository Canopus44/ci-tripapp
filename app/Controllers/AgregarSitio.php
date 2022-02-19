<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\MunicipioModel;
use App\Models\TouristicplaceModel;

class AgregarSitio extends BaseController
{

    public function index()
    {

        $data = [
            'title' => 'Agregar Dashboard Turistico',
            'company' => 'TripApp',
            'is_logged' => true,
            'username' => user()->username,
            'listMunicipios' => $this->ListMunicipios(),            
        ];   

        

        if ($data['username'] == 'admin' || $data['username'] == 'admin2') {
            
            //cargamos toda la informacion de los usuarios
            $userModel = new UserModel();
            $data['users'] = $userModel->get_all_data();

            // Ingresa a la vista de administrador
            echo view('templates/admin_is_logged/header', $data);
            echo view('pages/agregar_sitio', $data);
            echo view('templates/admin_is_logged/footer', $data);

        } else {
            echo view('templates/is_logged/header', $data);
            echo view('pages/dashboard', $data);
            echo view('templates/is_logged/footer', $data);
        }
    }

    private function ListMunicipios(){
        $MunicipioModel = new MunicipioModel();
        $data = $MunicipioModel->get_all_data();
        // return json_encode($data);
        return $data;
    }

}
