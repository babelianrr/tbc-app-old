<?php

namespace App\Models;

use CodeIgniter\Model;

class TooltipModel extends Model
{
    protected $table = 'tooltip';
    protected $useTimestamps = false;
    protected $allowedFields = 'detail';

    public function tooltip()
    {
        return $this->findAll();
    }
}
