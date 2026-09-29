<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['code' => 'P001', 'name' => 'Kaos SMK Kreatif', 'category' => 'Fashion', 'price' => 75000, 'stock' => 20, 'description' => 'Kaos desain siswa SMK'],
            ['code' => 'P002', 'name' => 'Totebag Edukasi', 'category' => 'Aksesori', 'price' => 45000, 'stock' => 15, 'description' => 'Totebag untuk kegiatan sekolah'],
            ['code' => 'P003', 'name' => 'Notebook Pelajar', 'category' => 'Alat Tulis', 'price' => 25000, 'stock' => 30, 'description' => 'Notebook untuk catatan belajar'],
            ['code' => 'P004', 'name' => 'Tumbler Sekolah', 'category' => 'Aksesori', 'price' => 65000, 'stock' => 18, 'description' => 'Botol minum reusable'],
            ['code' => 'P005', 'name' => 'Stiker Kreatif', 'category' => 'Aksesori', 'price' => 15000, 'stock' => 50, 'description' => 'Paket stiker bertema edukasi'],
            ['code' => 'P006', 'name' => 'Pin Ekskul', 'category' => 'Aksesori', 'price' => 10000, 'stock' => 40, 'description' => 'Pin kegiatan ekstrakurikuler'],
            ['code' => 'P007', 'name' => 'Topi Sekolah', 'category' => 'Fashion', 'price' => 55000, 'stock' => 12, 'description' => 'Topi model kasual'],
            ['code' => 'P008', 'name' => 'Mug Kelas', 'category' => 'Perlengkapan', 'price' => 35000, 'stock' => 25, 'description' => 'Mug souvenir kelas'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
