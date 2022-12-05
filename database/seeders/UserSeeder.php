<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=> 'James Bon',
            'email'=> 'superadmin@gmail.com',
            'password'=> bcrypt('superadmin123'),
            'role'=> 'superadmin',
            'image'=> 'superadmin.jpg',
            'verified' => '1',
        ]);

        User::create([
            'name'=> 'Rafael',
            'email'=> 'operasional@gmail.com',
            'password'=> bcrypt('operasional'),
            'role'=> 'opersioanal',
            'image'=> 'operasional.jpg',
            'verified' => '1',
        ]);
    }
}
