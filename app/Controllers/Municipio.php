<?php

namespace App\Controllers;

use App\Models\MunicipioModel;

class Municipio extends BaseController
{

    /**
     * @function insertDataApi - Insert data from API Only use one time
     */
    public function insertDataApi()
    {
        $dataAPI = json_decode(file_get_contents('https://www.datos.gov.co/resource/xdk5-pm3f.json'), true);

        foreach ($dataAPI as $key => $value) {
            $data['nombre'] = $value['municipio'];
            $data['region'] = $value['region'];
            $data['c_digo_dane_del_departamento'] = $value['c_digo_dane_del_departamento'];
            $data['departamento'] = $value['departamento'];
            $data['c_digo_dane_del_municipio'] = $value['c_digo_dane_del_municipio'];
            $this->insertData($data);
        }
    }


    //CRUD Basic structure
    public function getAllData()
    {
        $MunicipioModel = new MunicipioModel();
        $data = $MunicipioModel->get_all_data();
        echo json_encode($data);
    }

    public function insertData($data)
    {
        $MunicipioModel = new MunicipioModel();
        // $data = $this->request->getPost();
        $MunicipioModel->insert_data($data);
        // echo json_encode($data);
    }

    public function updateData($data)
    {
        $MunicipioModel = new MunicipioModel();
        $data = $this->request->getPost();
        $MunicipioModel->update_data($data['IdLugarTuristico'], $data);
        echo json_encode($data);
    }

    public function deleteData($data)
    {
        $MunicipioModel = new MunicipioModel();
        $data = $this->request->getPost();
        $MunicipioModel->delete_data($data['IdLugarTuristico']);
        echo json_encode($data);
    }
}
