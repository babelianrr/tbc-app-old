<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
  public function run()
  {
    $faker = \Faker\Factory::create('id_ID');

    // for ($i = 0; $i < 99; $i++) {
    // }
    $data = [
      'username' => $faker->username,
      'password' => md5('user1234'),
      'salt' => md5($faker->password),
      'name' => $faker->name,
      'email' => $faker->email,
      'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
      'address' => $faker->address,
      'phone' => $faker->phoneNumber,
      'avatar' => 'default.jpg',
      'created_at' => date('Y-m-d H:i:s'),
      'created_by' => 1,
      'updated_at' => null,
      'updated_by' => null
    ];
    echo "Memasukkan 1 dummy data.\n";
    $this->db->table('users')->insert($data);
  }
}
