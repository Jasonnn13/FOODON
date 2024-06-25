<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DonationItem;
use Illuminate\Support\Facades\DB;
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
        // $items = [
        //     [
        //         'nama' => 'Product A',
        //         'lokasi_pengambilan' => 'Location A',
        //         'tanggal_kadaluwarsa' => Carbon::now()->addDays(30),
        //         'jumlah' => 10,
        //         'foto' => '/storage/images/apelfuji.jpg',
        //         'status' => 1,
        //     ],
        //     [
        //         'nama' => 'Product B',
        //         'lokasi_pengambilan' => 'Location B',
        //         'tanggal_kadaluwarsa' => Carbon::now()->addDays(45),
        //         'jumlah' => 15,
        //         'foto' => '/storage/images/apelfuji.jpg',
        //         'status' => 1,
        //     ],
            // Add more items as needed
        // ];

        // Insert data into the database
        // foreach ($items as $item) {
        //     DonationItem::create($item);
        // }
        DB::table('donation_items')->insert([
            ['nama' => 'Apel Fuji', 'lokasi_pengambilan' => 'Jl. Paramount Raya, Gading Serpong, Tangerang', 'tanggal_kadaluwarsa' => '2024-05-21', 'jumlah' => 153, 'foto' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/12/16/3c59fc29-ad4b-4805-8ba8-98d1acb9a39c.jpg', 'status' => 1],
            ['nama' => 'Susu Ultra Milk', 'lokasi_pengambilan' => 'Jl. Jalur Sutera Barat Kav. 16, Alam Sutera, Tangerang', 'tanggal_kadaluwarsa' => '2024-06-21', 'jumlah' => 100, 'foto' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/7/13/1085013e-3509-45f0-8412-acb91babc924.jpg', 'status' => 1],
            ['nama' => 'Semangka', 'lokasi_pengambilan' => 'Jl. Pahlawan Seribu, BSD City, Tangerang', 'tanggal_kadaluwarsa' => '2024-06-25', 'jumlah' => 50, 'foto' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/6/6/fe6cb37e-95ed-4b1b-9c84-0090b8925e89.jpg', 'status' => 1],
            ['nama' => 'Roti Tawar', 'lokasi_pengambilan' => 'Jl. Pahlawan Seribu, BSD City, Tangerang', 'tanggal_kadaluwarsa' => '2024-07-15', 'jumlah' => 200, 'foto' => 'https://images.tokopedia.net/img/cache/900/product-1/2019/8/29/558608/558608_e91be312-ea2b-4e14-a1b9-4996859e599b_1280_1280', 'status' => 1],
            ['nama' => 'Telur Ayam', 'lokasi_pengambilan' => 'Jl. Ki Hajar Dewantara, BSD City, Tangerang', 'tanggal_kadaluwarsa' => '2024-06-30', 'jumlah' => 300, 'foto' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2020/11/11/3b4d9844-f305-452f-bf66-ed0bccb6d6f8.jpg', 'status' => 1],
            ['nama' => 'Minyak Goreng', 'lokasi_pengambilan' => 'Jl. Modernland, Tangerang', 'tanggal_kadaluwarsa' => '2025-01-10', 'jumlah' => 80, 'foto' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/8/12/a83f5acb-b9c6-4171-aa90-e587434244e8.jpg', 'status' => 1],
            ['nama' => 'Gula Pasir', 'lokasi_pengambilan' => 'Jl. Raya Serpong, Tangerang', 'tanggal_kadaluwarsa' => '2025-03-05', 'jumlah' => 120, 'foto' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2024/4/4/6c6797ec-02eb-406e-8960-cb6a7b527db3.jpg', 'status' => 1],
            ['nama' => 'Tepung Terigu', 'lokasi_pengambilan' => 'Jl. Kavling Raya, Serpong', 'tanggal_kadaluwarsa' => '2025-04-12', 'jumlah' => 60, 'foto' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/7/8/f47962cb-1402-467b-8da2-7752bce879ea.jpg', 'status' => 1],
            ['nama' => 'Mie Instan', 'lokasi_pengambilan' => 'Jl. Puspita Loka, Serpong', 'tanggal_kadaluwarsa' => '2024-12-30', 'jumlah' => 500, 'foto' => 'https://images.tokopedia.net/img/cache/900/hDjmkQ/2024/6/6/f73b3029-4999-4205-805b-53a89e0e0cc0.jpg', 'status' => 1],
            ['nama' => 'Kopi Bubuk', 'lokasi_pengambilan' => 'Jl. Moh. Husni Thamrin, Bintaro, Tangerang Selatan', 'tanggal_kadaluwarsa' => '2025-02-20', 'jumlah' => 40, 'foto' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2023/8/26/79711306-8e53-4b0e-ac2d-b4a705e80ec5.jpg', 'status' => 1],
        ]);
    }
}
