<?php

namespace Database\Seeders;

use App\Models\Payment_Method;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Hieu',
            'email' => 'hiusnguyen201@gmail.com',
        ]);

        Payment_Method::create(
            [
                "logo" => "/custom/images/banks/momo-logo.png",
                "name" => "MoMo",
                "description" => "Nạp tiền tự động liên kết với Momo, hoàn thành tức thì. Phí 5%",
                "fee" => 5,
                "status" => 1
            ],
        );

        Payment_Method::create(
            [
                "logo" => "/custom/images/banks/vnpay-logo.png",
                "name" => "VNPAY",
                "description" => "Quét mã QR PAY trên ứng dụng Mobile Banking, phí giao dịch 2%",
                "fee" => 2,
                "status" => 1
            ]
        );
    }
}
