<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('products')->insert([
            [
                'name' => 'Turnitin 1 Tháng - Nâng cấp chính chủ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Phi/Turnitin%201%20th%C3%A1ng-97360.png?hash=1657644418',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '3',
            ],
            [
                'name' => 'Zoom Pro ~1 tháng (28 ngày) - Gói nâng cấp',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP-New/Thang/Zoom%20Pro%2028d-58614.png?hash=1721286523',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '3',
            ],
            [
                'name' => 'Windows 10 Professional - CD Key',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Windows%2010%20Professional%20CD%20Key-22736.png?hash=1716345943',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '3',
            ],
            [
                'name' => 'Canva Pro 1 năm - Gia hạn chính chủ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Canva-giahan-1nam-34986.png?hash=1715586995',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '3',
            ],
            [
                'name' => 'ChatGPT (OpenAI) - Tài khoản',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/ChatGPT%20TaiKhoan-78300.png?hash=1718253068',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '3',
            ],[
                'name' => 'Grammarly Premium 1 năm - Tài khoản',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Grammarly%20Premium-1y-20123.png?hash=1716176426',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '3',
            ],[
                'name' => 'Khóa học Coursera',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Divine-Shop-Coursera-14882.jpg?hash=1658741814',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '3',
            ],[
                'name' => 'Duolingo 1 năm - Gia hạn chính chủ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Divine-Shop-Duolingo-Gia%20H%E1%BA%A1n-1-Nam-35426.jpg?hash=1658742006',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '3',
            ],[
                'name' => 'YouTube Premium + YouTube Music 6 tháng',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Youtube/YouTube%20Premium%20Music-6thang-48726.png?hash=1715587324',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '3',
            ],
            [
                'name' => 'Spotify Premium 1 năm - Gia hạn chính chủ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Spotify/Spotify-GiaHan-1y-65116.png?hash=1716175019',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ],
            [
                'name' => 'Netflix Premium 1 ngày - Tài khoản',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Netflix/NETFLIX-1ngay%20(1)-49447.png?hash=1715588562',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ], [
                'name' => 'Tidal HiFi Plus 1 tháng - Tài khoản nghe nhạc',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Tidal-HiFiPlus-1m-74207.png?hash=1716175338',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ], [
                'name' => 'NoPing 1 tháng - Code kích hoạt',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP-New/Thang/NoPing%201m-28927.png?hash=1715836299',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ], [
                'name' => 'Gia hạn Calm Premium (1 năm)',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Calm%20Premium-giahan-24090.png?hash=1715588122',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ], [
                'name' => 'ExitLag 1 tháng - Code gia hạn',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh/14.03.2022/ExitLag-92081.png?hash=1650276321',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ], [
                'name' => 'GearUp Booster giảm lag khi chơi game 12 Tháng - Windows',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/GearUp%20Booster-12m-75216.png?hash=1717204009',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ], [
                'name' => 'Tài khoản nghe nhạc Spotify Premium (1 tháng)',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Spotify/Spotify-TaiKhoan-1m-53726.png?hash=1716175083',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ], [
                'name' => 'Gói gia hạn Spotify Premium 6 tháng',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Spotify/Spotify-GiaHan-6m-55389.png?hash=1716175050',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ], [
                'name' => 'Tài khoản nghe nhạc Spotify Premium (4 tháng)',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Spotify/Spotify-TaiKhoan-4m-25735.png?hash=1716175260',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ], [
                'name' => 'Deezer HiFi 1 Tháng - Tài khoản nghe nhạc',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Deezer%20HiFi-1m-21760.png?hash=1716175393',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '1',
            ],
            [
                'name' => 'Microsoft Office 2019 Professional Plus for Windows ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Office/Microsoft%20Office%202019%20Professional%20Plus-windows-11845.png?hash=1715586605',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '2',
            ],[
                'name' => 'Microsoft 365 (Office 365) - 1 Năm 1TB - Nâng cấp chính chủ ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Office/Microsoft%20365-1y-23055.png?hash=1715829786',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '2',
            ],[
                'name' => ' Kaspersky Standard 1 năm (3 thiết bị) - Nâng cấp chính chủ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Kaspersky%20Standard-3tb-66601.png?hash=1715391513',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '2',
            ],[
                'name' => 'AutoCAD 1 năm - Nâng cấp chính chủ ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Autodesk/Divine-Shop-Nang-Cap-Auto-moi-69740.jpg?hash=1695800777',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '2',
            ],[
                'name' => 'Nâng cấp LinkedIn Premium Business 6 tháng ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Linkedin%20Premium-29287.jpg?hash=1665656647',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '2',
            ],[
                'name' => 'Canva Pro 1 tháng - Gia hạn chính chủ ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/Canva-giahan-1thang-10230.png?hash=1715587059',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '2',
            ],[
                'name' => 'ChatGPT Plus 20$ 1 tháng (GPT-4o) - Tài khoản Share ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/ChatGPT%20Plus%20Share-1m-87789.png?hash=1718253008',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '2',
            ],[
                'name' => 'Nâng cấp Flame (1 năm) ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Autodesk/Divine-Shop-Flame-1-Nam-62416.jpg?hash=1658742213',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '2',
            ],[
                'name' => 'Autodesk 2 App 1 năm - Nâng cấp chính chủ ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Autodesk/Divine-Shop-Autodesk-1-Nam-68919.jpg?hash=1658741623',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '2',
            ],[
                'name' => 'McAfee Livesafe 1 năm - Key kích hoạt ',
            'image' => 'https://cdn.divineshop.vn/image/catalog/Anh-SP/Kh%C3%A1c/McAfee%20Livesafe-25989.png?hash=1715739022',
            'price' => rand(10, 100),
            'view' => rand(10, 10000),
            'description' => $faker->text(500),
            'category_id' => '2',
            ],
            
        ]);


    }
}
