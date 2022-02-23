<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\TouristicplaceModel;
use App\Models\MunicipioModel;

class Dashboard extends BaseController
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['company'] = 'TripApp';
        $data['is_logged'] = true;
        $data['username'] = user()->username;
        $data['mensajeError'] = 'Seleccione un metodo de filtro';
        $data['listMunicipios'] = $this->ListMunicipios();


        if ($data['username'] == 'admin' || $data['username'] == 'admin2') {
            
            //cargamos toda la informacion de los usuarios
            $userModel = new UserModel();
            $data['users'] = $userModel->get_all_data();

            // Ingresa a la vista de administrador
            echo view('templates/admin_is_logged/header', $data);
            echo view('pages/admin_dashboard', $data);
            echo view('templates/admin_is_logged/footer', $data);

        } else {
            $data['listLugares'] = $this->ListLugares();

            echo view('templates/is_logged/header', $data);
            echo view('pages/dashboard', $data);
            echo view('templates/is_logged/footer', $data);
        }
    }
    private function listLugares()
    {
        $TouristicplaceModel = new TouristicplaceModel();
        $data = $TouristicplaceModel->get_all_data();
        // return json_encode($data);
        return $data;
    }
    private function ListMunicipios(){
        $MunicipioModel = new MunicipioModel();
        $data = $MunicipioModel->get_all_data();
        // return json_encode($data);
        return $data;
    }

}
