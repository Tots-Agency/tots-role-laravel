<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TotsRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tots_role')->insert([
            'title' => 'Super Admin',
        ]);
        DB::table('tots_role')->insert([
            'title' => 'Basic User',
        ]);

        // For example, let's create 50 users that each has one related post:
        /*User::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();*/
    }
}
