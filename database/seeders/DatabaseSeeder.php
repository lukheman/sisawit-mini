<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\Bibit;
use App\Models\Pengiriman;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => Role::ADMIN,
            'password' => 'password123'
        ]);

        User::factory()->create([
            'name' => 'Pembeli',
            'email' => 'pembeli@gmail.com',
            'role' => Role::PEMBELI,
            'password' => 'password123'
        ]);

        // $this->call([
        //     KelasSeeder::class,
        //     KasMingguanSeeder::class,
        //     KasPembayaranSeeder::class,
        // ]);

  // === BUAT PEMBELI ===
        User::factory(10)->create([
            'role' =>Role::PEMBELI
        ]);

        // === BUAT DATA BIBIT ===
        Bibit::factory(20)->create();

        // === BUAT PESANAN + DETAIL + PENGIRIMAN ===
        Pesanan::factory(30)
            ->create()
            ->each(function ($pesanan) {

                // Buat 1–5 detail item
                $details = PesananDetail::factory(rand(1,5))
                    ->create([
                        'pesanan_id' => $pesanan->id,
                        'harga_satuan' => function() {
                            return rand(20000, 100000);
                        },
                        'subtotal' => function (array $attr) {
                            return $attr['jumlah'] * $attr['harga_satuan'];
                        }
                    ]);

                // Hitung total harga
                $total = $details->sum('subtotal');
                $pesanan->update(['total_harga' => $total]);

                // Buat pengiriman untuk setiap pesanan
                Pengiriman::factory()->create([
                    'pesanan_id' => $pesanan->id
                ]);
            });

        echo "Database seeding completed.\n";

    }
}
