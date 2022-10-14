<?php

namespace App\Models;

use CodeIgniter\Model;

class KonkulModel extends Model
{
    protected $table = 'kontrak_matkul';

    protected $allowedFields = ['nim','id_matkul','id'];

    protected $primaryKey = 'id_kontrak';

    public function joinTableKonkul(){
        $builder = $this->db->table('kontrak_matkul');
        $builder->select('*');
        $builder->join('data_mahasiswa','data_mahasiswa.nim = kontrak_matkul.nim ');
        $builder->join('matkul','matkul.id_matkul = kontrak_matkul.id_matkul');
        $builder->join('data_dosen','data_dosen.id = kontrak_matkul.id');
        return $builder;
    }

    public function getAllKonkul(){
        $builder = $this->joinTableKonkul();
        return $builder->get()->getResultArray();

    }
    
    public function getKonkul($id){
        return $this->where(['id_kontrak' => $id])->first();
    }

}