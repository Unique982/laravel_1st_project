<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Look;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//       User::factory()->create([
//            'name' => 'testingcode',
//            'email' => 'testingcode@gmail.com',
//        'password' =>Hash::make('testingcode@gmail.com'),
//     ]);
//        Tag::create([
//            'name' => 'Ujjwal Thakuri',
//            'frequency' => 11111,
//        ]);

//        Look::create([
//            'name' => 'Muna Kafle',
//            'code' => 24,
//            'type' =>'BCA',
//            'position' =>'student',
//        ]);
    }
}
