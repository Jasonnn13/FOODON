<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DonationItem;
use Carbon\Carbon;

class DonationItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create dummy data using the DonationItem model
        $items = [
            [
                'nama' => 'Product A',
                'lokasi_pengambilan' => 'Location A',
                'tanggal_kadaluwarsa' => Carbon::now()->addDays(30),
                'jumlah' => 10,
                'foto' => '/storage/images/apelfuji.jpg',
                'status' => 1,
            ],
            [
                'nama' => 'Product B',
                'lokasi_pengambilan' => 'Location B',
                'tanggal_kadaluwarsa' => Carbon::now()->addDays(45),
                'jumlah' => 15,
                'foto' => '/storage/images/apelfuji.jpg',
                'status' => 1,
            ],
            // Add more items as needed
        ];

        // Insert data into the database
        foreach ($items as $item) {
            DonationItem::create($item);
        }
    }
}
