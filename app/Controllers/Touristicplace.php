<?php

namespace App\Controllers;

use App\Models\TouristicplaceModel;
use App\Models\UserModel;
use App\Models\MunicipioModel;

class Touristicplace extends BaseController
{

    public function verLugar()
    {

        $data = [
            'title' => 'Agregar Dashboard Turistico',
            'company' => 'TripApp',
            'is_logged' => true,
            'username' => user()->username,
        ];

        $data['infoLugar'] = $this->getDataById();

        // var_dump($data);

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
            echo view('pages/detalle_lugar', $data);
            echo view('templates/is_logged/footer', $data);
        }
    }


    public function create()
    {

        $data = [
            'title' => 'Agregar Sitio Turistico',
            'company' => 'TripApp',
            'is_logged' => true,
            'username' => user()->username,
            'post' => $this->request->getPost(),
        ];

        $parameters = "";
        foreach ($this->request->getPost() as $key => $value) {
            $parameters .= $key . ": " . $value . "<br>";
        }

        var_dump($data);
    }

    //CRUD Basic structure
    public function getAllData()
    {
        $touristicPlaceModel = new TouristicplaceModel();
        $data = $touristicPlaceModel->get_all_data();
        echo json_encode($data);
    }

    public function insertData()
    {
        $touristicPlaceModel = new TouristicplaceModel();
        $data = $this->request->getPost();
        // var_dump($data);

        $files = $this->request->getFiles();
        $data = $this->uploadImages($files, $data);

        $dataToInsert = [
            'IdMunLug' => intval($this->request->getPost('IdMunLug')),
            'Nombre' => $data['nombre'],
            'Descripcion' => $data['descripcion'],
            'img1' => $data['img1'],
            'img2' => $data['img2'],
            'img3' => $data['img3'],
            'img4' => $data['img4'],
            'video' => $data['video'],
            'ubicacion' => $data['ubicacion'],
        ];

        $touristicPlaceModel->insert_data($dataToInsert);

        // Se carga la vista 
        return redirect()->back()->withInput();

        // echo json_encode($data);
    }

    public function updateData()
    {
        $touristicPlaceModel = new TouristicplaceModel();
        $data = $this->request->getPost();
        $touristicPlaceModel->update_data($data['IdLugarTuristico'], $data);
        echo json_encode($data);
    }

    public function deleteData()
    {
        $touristicPlaceModel = new TouristicplaceModel();
        $data = $this->request->getPost();
        $touristicPlaceModel->delete_data($data['IdLugarTuristico']);
        echo json_encode($data);
    }

    private function encodeImagesBase64($images)
    {
        $imagesEncoded = [];
        foreach ($images as $image) {
            $path = $image->path;
            $imagesEncoded['type'] = pathinfo($path, PATHINFO_EXTENSION);
            $imagesEncoded['b64'] = base64_encode(file_get_contents($path));
        }
        return $imagesEncoded;
    }

    private function uploadImages($files, $data)
    {
        $countFiles = count($files);
        $count = 1;
        foreach ($files as $img) {
            if ($img->isValid() && !$img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'public/uploads', $newName);

                $data['img' . $count] = $newName;
                $count++;
            }
        }
        return $data;
    }


    private function getDataById()
    {
        $TouristicplaceModel = new TouristicplaceModel();
        $data = $TouristicplaceModel->get_data_by_id($this->request->getPost('IdLugarTuristico'));
        return $data;
    }

    private function getDataById_fx($id)
    {
        $TouristicplaceModel = new TouristicplaceModel();
        $data = $TouristicplaceModel->get_data_by_id($id);
        return $data;
    }


    public function filtrar()
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


            // recibimos los valores por post
            $getPost_ = $this->request->getPost();

            if (!empty($getPost_)) {

                $municipio = $getPost_['municipio'];
                $data['listLugares'] = $this->listLugaresFilter($municipio);
                
            } else {
                $data['mensajeError'] = 'Debe seleccionar una opción';
                $data['listLugares'] = $this->ListLugares();
            }

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

    private function listLugaresFilter($id)
    {
        $TouristicplaceModel = new TouristicplaceModel();
        $data = $TouristicplaceModel->get_all_data_only_ids($id);
        return $data;
    }

    private function ListMunicipios()
    {
        $MunicipioModel = new MunicipioModel();
        $data = $MunicipioModel->get_all_data();
        // return json_encode($data);
        return $data;
    }
}
