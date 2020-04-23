<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    DB::table('users')->insert([
      [
        'name' => 'test1',
        'email' => 'aaa@bbb.com',
        'password' => Hash::make('pass1234'),
      ],[
        'name' => Str::random(10),
        'email' => Str::random(10) . '@gmail.com',
        'password' => Hash::make('password'),
      ]
    ]);
  }
}
