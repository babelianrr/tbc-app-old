<?php

namespace App\Models;

use CodeIgniter\Model;

class C2019Model extends Model
{
  protected $table = 'c2019';
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
