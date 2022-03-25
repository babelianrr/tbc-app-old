<?php

namespace App\Models;

use CodeIgniter\Model;

class ForumModel extends Model
{
  protected $table = 'thread';
  protected $primaryKey = 'id';
  protected $allowedFields = ['thread_title', 'thread_body', 'category_id', 'created_at', 'created_by', 'updated_at', 'updated_by'];
  protected $returnType = '\App\Entities\Forum';
  protected $useTimestamps = false;
}
