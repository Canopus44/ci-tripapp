<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    //CRUD Basic structure
    public function getAllData()
    {
        $UserModel = new UserModel();
        $data = $UserModel->get_all_data();
        echo json_encode($data);
    }   

    public function updateData($data)
    {
        $UserModel = new UserModel();
        $data = $this->request->getPost();
        $UserModel->update_data($data['IdLugarTuristico'], $data);
        echo json_encode($data);
    }
    public function deleteData($data)
    {
        $UserModel = new UserModel();
        $data = $this->request->getPost();
        $UserModel->delete_data($data['IdLugarTuristico']);
        echo json_encode($data);
    }
}
