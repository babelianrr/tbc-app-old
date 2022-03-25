<?php

namespace App\Models;

use CodeIgniter\Model;

class C2022Model extends Model
{
  protected $table = 'c2022';
  protected $useTimestamps = false;
  protected $allowedFields = ['slug', 'nama'];

  public function getCard($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }
    return $this->where(['slug' => $slug])->first();
  }
}
