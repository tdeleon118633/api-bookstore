<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Tito De Leon',
          'email' => 'tdeleon@gmail.com',
          'password' => Hash::make('secret'),
          'type' => 'admin',
      ]);

      factory(App\User::class, 10)->create();
    }
}
