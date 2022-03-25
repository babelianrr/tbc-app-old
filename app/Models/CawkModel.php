<?php

namespace App\Models;

use CodeIgniter\Model;

class CawkModel extends Model
{
  protected $table = 'cawk';
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
