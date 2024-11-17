<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\CategoryProduct;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat instance dari Faker untuk membuat data palsu
        $faker = Faker::create();

        // Mengambil semua category_id dari tabel CategoryProduct
        $categories = CategoryProduct::pluck('id')->toArray();

        // Array untuk menyimpan data sebelum di-insert
        $data = [];

        // Loop untuk menambahkan 1 juta data
        for ($i = 0; $i < 100; $i++) {
            // Setiap data produk memiliki nama, kategori yang diambil dari database, dan harga
            $data[] = [
                'name_product' => $faker->word, // Menghasilkan kata acak untuk nama produk
                'category_id' => $faker->randomElement($categories), // Memilih category_id dari data yang sudah ada
                'price_product' => rand(15000, 250000), // Harga acak antara 100 sampai 1000
                'image_path' => $faker->imageUrl(640, 480, 'product', true), // URL gambar acak
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // Melakukan insert setiap 10.000 data untuk efisiensi memori
            if (count($data) == 10) {
                DB::table('products')->insert($data); // Insert ke database
                $data = []; // Kosongkan array setelah insert
            }
        }

        // Insert sisa data yang belum di-insert
        if (!empty($data)) {
            DB::table('products')->insert($data);
        }
    }
}
