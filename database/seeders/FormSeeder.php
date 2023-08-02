<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('forms')->insert([
            [
                'nama_peminjam' => 'Sehun',
                'ukmormawa_peminjam' => 'ITTS Rap',
                'barang_peminjam' => 1
            ],
            [
                'nama_peminjam' => 'Kyungsoo',
                'ukmormawa_peminjam' => 'ITTS Actor',
                'barang_peminjam' => 2
            ],
            [
                'nama_peminjam' => 'Xiumin',
                'ukmormawa_peminjam' => 'ITTS Smart',
                'barang_peminjam' => 3
            ],
        ]);
    }
}
