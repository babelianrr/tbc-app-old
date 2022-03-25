<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ThreadSeeder extends Seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create();

		for ($i = 0; $i < 1000; $i++) {
			$data = [
				'thread_title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
				'thread_body' => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),
				'category_id' => 1,
				'created_at' => date('Y-m-d H:i:s'),
				'created_by' => rand(1, 100)
			];
			echo "Memasukkan " . ($i + 1) . " dummy data.\n";
			$this->db->table('thread')->insert($data);
		}
	}
}
