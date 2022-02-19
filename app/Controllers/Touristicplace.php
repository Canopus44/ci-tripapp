<?php

namespace App\Controllers;

use App\Models\TouristicplaceModel;

class Touristicplace extends BaseController
{


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

        $data['municipio'] = intval($this->request->getPost('municipio'));
        
        $files = $this->request->getFiles();
        $imgs = $this->encodeImagesBase64($files);

        $cnt = count($imgs);

        for ($i=0; $i < $cnt ; $i++) { 
            $data["img".$i+1] = $imgs[$i];
        }
        echo "<pre>";
        var_dump($data);
        echo "</pre>";


        $img_deco = base64_decode($data['img3']);
        echo "<img src='data:image/png;base64,".$img_deco."'>";
        // $touristicPlaceModel->insert_data($data);
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


}
