<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table = 'matkul';

    protected $allowedFields = ['id_matkul','id','nama_matkul','sks','hari','waktu','tempat'];
    protected $useAutoIncrement = false;
    protected $primaryKey = 'id_matkul';

    public function joinTableMatkul(){
        $builder = $this->db->table('matkul');
        $builder->select('*');
        $builder->join('data_dosen','data_dosen.id = matkul.id');
        return $builder;
    }

    public function getAllMatkul(){
        $builder = $this->joinTableMatkul();
        return $builder->get()->getResultArray();
        
    }

    public function getAllMataKul(){
        $data = $this->findAll();
        return $data;

    }
    
    public function getMatkul($id){
        return $this->where(['id_matkul' => $id])->first();
    }

}