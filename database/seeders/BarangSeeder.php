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
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'K',
                'nama_barang' => 'Kursi',
                'brand_barang' => 'Deli',
            ],
            [
                'kode_barang' => 'MC1',
                'nama_barang' => 'Microphone',
                'brand_barang' => 'Ashley',
            ],
            [
                'kode_barang' => 'KO1',
                'nama_barang' => 'Kabel Olor',
                'brand_barang' => 'No Brand',
            ],
        ]);
    }
}