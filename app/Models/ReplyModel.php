<?php

namespace App\Models;

use CodeIgniter\Model;

class ReplyModel extends Model
{
  protected $table = 'reply';
  protected $primaryKey = 'id';
  protected $allowedFields = ['thread_id', 'user_id', 'reply_body', 'created_at', 'created_by', 'updated_at', 'updated_by'];
  protected $returnType = '\App\Entities\Reply';
  protected $useTimestamps = false;
}
