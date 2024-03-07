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
        $data = [
            ['barang_id' => 1, 'kategori_id' => '001', 'barang_kode' => 'MK001', 'barang' => 'Nasi Goreng', 'harga_beli' => 27000, 'harga_jual' => 33210],
            ['barang_id' => 2, 'kategori_id' => '001', 'barang_kode' => 'MK002', 'barang' => 'Mie Goreng', 'harga_beli' => 27000, 'harga_jual' => 33210],
            ['barang_id' => 3, 'kategori_id' => '001', 'barang_kode' => 'MK003', 'barang' => 'Sate Ayam', 'harga_beli' => 27000, 'harga_jual' => 33210],
            ['barang_id' => 4, 'kategori_id' => '002', 'barang_kode' => 'MK004', 'barang' => 'Gado-Gado', 'harga_beli' => 67000, 'harga_jual' => 82410],
            ['barang_id' => 5, 'kategori_id' => '002', 'barang_kode' => 'MK005', 'barang' => 'Soto Ayam', 'harga_beli' => 67000, 'harga_jual' => 82410],
        ];

        DB::table('m_barang')->insert($data);
    }
}
