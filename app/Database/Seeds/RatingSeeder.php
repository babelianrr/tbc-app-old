<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RatingSeeder extends Seeder
{
  public function run()
  {

    for ($i = 0; $i < 100000; $i++) {
      $data = [
        'thread_id' => rand(1, 1000),
        'user_id' => rand(1, 100),
        'star' => rand(1, 5)
      ];
      echo "Memasukkan " . ($i + 1) . " dummy data.\n";
      $this->db->table('rating')->insert($data);
    }
  }
}
