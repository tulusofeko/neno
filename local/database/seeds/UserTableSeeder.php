<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
	   	DB::table('users')->insert([
            'nama' => 'Eko Tulus',
            'email' => 'eko.tulus',
            'password' => bcrypt('123456'),
            'level' => 'Superadmin',
        ]);
    }
}
