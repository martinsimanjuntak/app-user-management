<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        

        // User::factory()->create([
        //     'name'=> 'James Bon',
        //     'email'=> 'superadmin@gmail.com',
        //     'password'=> bcrypt('superadmin123'),
        //     'role'=> 'superadmin',
        //     'image'=> 'superadmin.jpg',
        //     'verified' => '1',
        // ]);

        // User::factory()->create([
        //     'name'=> 'Rafael',
        //     'email'=> 'operasional@gmail.com',
        //     'password'=> bcrypt('operasional'),
        //     'role'=> 'operasional',
        //     'image'=> 'operasional.jpg',
        //     'verified' => '1',
        // ]);
        $this->call(UserSeeder::class);
    }
}
