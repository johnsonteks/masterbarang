<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'code' => 'A1',
                'name' => 'Meter',
            ],
            [
                'code' => 'A2',
                'name' => 'Kilogram',
            ],
            [
                'code' => 'A3',
                'name' => 'Gram',
            ],
            [
                'code' => 'A4',
                'name' => 'Liter',
            ],
        ]);
    }
}
