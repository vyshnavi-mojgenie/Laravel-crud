<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create(
        [
          'name' => 'Admin',
          'email' => 'admin@mojgenie.com',
          'status' => 1,
          'phone' => 9988999999,
          'password' => Hash::make('password'),
          'dob' => now()

          ]
      );



}
}