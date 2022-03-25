<?php

namespace App\Models;

use CodeIgniter\Model;

class P2020Model extends Model
{
  protected $table = 'p2020';
  protected $useTimestamps = false;
  protected $allowedFields = ['slug', 'nama'];

  public function getPdt($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }
    return $this->where(['slug' => $slug])->first();
  }
}
