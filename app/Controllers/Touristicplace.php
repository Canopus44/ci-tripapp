<?php

namespace App\Controllers;

use App\Models\TouristicplaceModel;

class Touristicplace extends BaseController
{

    // public function index()
    // {
    //     $data['title'] = 'Dashboard';
    //     $data['company'] = 'TripApp';
    //     $data['is_logged'] = true;
    //     $data['username'] = user()->username;


    //     if ($data['username'] == 'admin' || $data['username'] == 'admin2') {
            
    //         // Ingresa a la vista de administrador
    //         echo view('templates/admin_is_logged/header', $data);
    //         echo view('pages/admin_dashboard', $data);
    //         echo view('templates/admin_is_logged/footer', $data);

    //     } else {
    //         echo view('templates/is_logged/header', $data);
    //         echo view('pages/dashboard', $data);
    //         echo view('templates/is_logged/footer', $data);
    //     }
    // }

    //CRUD Basic structure
    public function getAllData(){        
        $touristicPlaceModel = new TouristicplaceModel();
        $data = $touristicPlaceModel->get_all_data();
        echo json_encode($data);        
    }

    public function insertData(){
        $touristicPlaceModel = new TouristicplaceModel();
        $data = $this->request->getPost();
        $touristicPlaceModel->insert_data($data);
        echo json_encode($data);
    }

    public function updateData(){
        $touristicPlaceModel = new TouristicplaceModel();
        $data = $this->request->getPost();
        $touristicPlaceModel->update_data($data['IdLugarTuristico'], $data);
        echo json_encode($data);
    }

    public function deleteData(){
        $touristicPlaceModel = new TouristicplaceModel();
        $data = $this->request->getPost();
        $touristicPlaceModel->delete_data($data['IdLugarTuristico']);
        echo json_encode($data);
    }
}
