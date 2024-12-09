<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'code' => 'A1',
                'name' => 'Selang Air',
                'harga'=> '5000',
                'deskripsi' => 'Bahan plastik',
                'satuan_id' => 1
            ],
            [
                'code' => 'A2',
                'name' => 'Semangka',
                'harga'=> '20000',
                'deskripsi' => 'Impor china',
                'satuan_id' => 2
            ],
            [
                'code' => 'A3',
                'name' => 'Gula',
                'harga'=> '5000',
                'deskripsi' => 'Impor china',
                'satuan_id' => 3
            ],
            [
                'code' => 'A4',
                'name' => 'Minyak',
                'harga'=> '15000',
                'deskripsi' => 'Minyak sawit',
                'satuan_id' => 4
            ],
        ]);
    }
}
