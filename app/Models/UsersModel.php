<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $allowedFields = ['username', 'password', 'salt', 'name', 'email', 'birth_date', 'address', 'phone', 'avatar', 'role', 'created_at', 'created_by', 'updated_at', 'updated_by'];
  protected $returnType = '\App\Entities\Users';
  protected $useTimestamps = false;
}
