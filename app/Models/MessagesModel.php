<?php

namespace App\Models;

use CodeIgniter\Model;

class MessagesModel extends Model
{
  protected $table = 'messages';
  protected $primaryKey = 'id';
  protected $allowedFields = ['sender_id', 'recipient_id', 'message', 'is_read', 'created_at'];
  protected $returnType = '\App\Entities\Messages';
  protected $useTimestamps = false;
}
