<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
  protected $table = 'category';
  protected $primaryKey = 'category_id';
  protected $allowedFields = ['category'];
  protected $returnType = '\App\Entities\Category';
  protected $useTimestamps = false;
}
