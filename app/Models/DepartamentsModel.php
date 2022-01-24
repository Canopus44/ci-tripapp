<?php namespace App\Models;

use CodeIgniter\Model;

class DepartamentsModel extends Model
{

    public function getInfoAPIDepartaments()
    {
        $getInfoAPI = file_get_contents('https://www.datos.gov.co/resource/xdk5-pm3f.json');
        $getInfoAPI = json_decode($getInfoAPI, true);
        return $getInfoAPI;
    }
}
