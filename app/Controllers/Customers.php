<?php

namespace App\Controllers;

use App\Models\CustomersModel;

class Customers extends BaseController
{
    //CRUD Basic structure
    public function getAllData()
    {
        $CustomersModel = new CustomersModel();
        $data = $CustomersModel->get_all_data();
        echo json_encode($data);
    }

    public function insertData()
    {
        $CustomersModel = new CustomersModel();
        $data = $this->request->getPost();
        // var_dump($data);        

        $dataToInsert = [
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'mensaje' => $data['mensaje'],           
        ];

        $CustomersModel->insert($dataToInsert);

        // Se carga la vista 
        return redirect()->back()->withInput();

        // echo json_encode($data);
    }

    public function updateData()
    {
        $CustomersModel = new CustomersModel();
        $data = $this->request->getPost();
        $CustomersModel->update_data($data['IdLugarTuristico'], $data);
        echo json_encode($data);
    }

    public function deleteData()
    {
        $CustomersModel = new CustomersModel();
        $data = $this->request->getPost();
        $CustomersModel->delete_data($data['IdLugarTuristico']);
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
}
