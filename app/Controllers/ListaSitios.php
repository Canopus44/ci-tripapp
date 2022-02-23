<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\MunicipioModel;
use App\Models\TouristicplaceModel;

class ListaSitios extends BaseController
{

    public function index()
    {

        $data = [
            'title' => 'Agregar Dashboard Turistico',
            'company' => 'TripApp',
            'is_logged' => true,
            'username' => user()->username,
            'listSitios' => $this->ListSitios(), 
            'listMunicipios' => $this->ListMunicipios(), 
            'mensajeError' => 'Seleccione un metodo de filtro', 
            'listLugares' => $this->ListLugares(), 

        ]; 
        // $data['listLugares'] = $this->ListLugares();

        if ($data['username'] == 'admin' || $data['username'] == 'admin2') {
            
            //cargamos toda la informacion de los usuarios
            // $userModel = new UserModel();
            // $data['users'] = $userModel->get_all_data();

            // Ingresa a la vista de administrador
            echo view('templates/admin_is_logged/header', $data);
            echo view('pages/lista_sitios', $data);
            echo view('templates/admin_is_logged/footer', $data);

        } else {
            echo view('templates/is_logged/header', $data);
            echo view('pages/dashboard', $data);
            echo view('templates/is_logged/footer', $data);
        }
    }

    private function ListSitios(){
        $TouristicplaceModel = new TouristicplaceModel();
        $data = $TouristicplaceModel->get_all_data_fx();
        // return json_encode($data);
        return $data;
    }

    private function ListMunicipios(){
        $MunicipioModel = new MunicipioModel();
        $data = $MunicipioModel->get_all_data();
        // return json_encode($data);
        return $data;
    }

    private function listLugares()
    {
        $TouristicplaceModel = new TouristicplaceModel();
        $data = $TouristicplaceModel->get_all_data();
        // return json_encode($data);
        return $data;
    }


}
