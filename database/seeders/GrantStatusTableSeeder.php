<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GrantStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grantstatuses')->insert([
            [
                'name' => 'seeking',
            ],

            [
                'name' => 'requested',
            ],
            [
                'name' => 'granted'
            ],
            [
                'name' => 'denied'
            ]
        ]);
    }
}
