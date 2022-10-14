<?php

namespace App\Models;

use CodeIgniter\Model;

class MhsModel extends Model
{
    protected $table = 'data_mahasiswa';

    protected $allowedFields = ['nim','nama_mhs','jurusan','semester'];
    protected $useAutoIncrement = false;
    protected $primaryKey = 'nim';
    
    public function getAllMhs(){
        $data = $this->findAll();
        return $data;

    }


    public function getMhs($id){
        return $this->where(['nim' => $id])->first();
    }

}