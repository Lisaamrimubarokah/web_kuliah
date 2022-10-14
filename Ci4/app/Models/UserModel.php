<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';

    protected $allowedFields = ['nama','username','password'];

 
    public function getUser($username){
        return $this->where(['username' => $username])->first();
    }

}