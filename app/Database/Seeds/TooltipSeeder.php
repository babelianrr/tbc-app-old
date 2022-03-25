<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TooltipSeeder extends Seeder
{
  public function run()
  {
    $faker = \Faker\Factory::create();

    for ($i = 0; $i < 100; $i++) {
      $data = [
        'slug' => 'tooltip-' . ($i + 100),
        'detail' => $faker->sentence($nbWords = 6, $variableNbWords = true)
      ];

      echo "Memasukkan " . ($i + 1) . " dummy data.\n";
      $this->db->table('tooltip')->insert($data);
    }
  }
}
