<?php namespace App\Models;

use CodeIgniter\Model;

class TouristicplaceModel extends Model
{
    protected $table      = 'lugarturistico';
    protected $primaryKey = 'IdLugarTuristico';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['IdMunLug', 'Nombre', 'Descripcion', 'img1', 'img2', 'img3', 'img4', 'video','ubicacion'];        

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    //Funciones CRUD Para los Sitios Turisticos

    //Las funciones recibiran objetos tipo Array para manejarlos de una forma mas sencilla
    public function insert_data($data = array())
    {
        $this->db->table($this->table)->insert($data);
        return $this->db->insertID();
    }

    public function update_data($id, $data = array())
    {
        $this->db->table($this->table)->update($data, array(
            "IdLugarTuristico" => $id,
        ));
        return $this->db->affectedRows();
    }

    public function delete_data($id)
    {
        return $this->db->table($this->table)->delete(array(
            "IdLugarTuristico" => $id,
        ));
    }

    public function get_all_data()
    {
        $query = $this->db->query('select * from ' . $this->table);
        return $query->getResult();
    }

}