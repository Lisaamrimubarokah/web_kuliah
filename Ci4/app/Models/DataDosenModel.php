<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDosenModel extends Model
{
    protected $table = 'data_dosen';

    protected $allowedFields = ['id','nama','nohp'];
    protected $useAutoIncrement = false;

    public function joinTableDosen(){
        $builder = $this->db->table('data_dosen');
        $builder->select('*');
        $builder->join('matkul','matkul.id = data_dosen.id');
        return $builder;
    }

    public function getAllDosen(){
        $data = $this->findAll();
        return $data;

    }

 
    public function getDosen($id){
        return $this->where(['id' => $id])->first();
    }

}