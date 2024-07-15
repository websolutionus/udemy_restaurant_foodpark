<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentGatewaySettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payment_gateway_settings = array(
            array(
                "id" => 1,
                "key" => "paypal_logo",
                "value" => "/uploads/media_64e58838d3a51.png",
                "created_at" => "2023-08-19 05:36:53",
                "updated_at" => "2023-08-23 04:16:56",
            ),
            array(
                "id" => 2,
                "key" => "paypal_status",
                "value" => "1",
                "created_at" => "2023-08-19 05:36:53",
                "updated_at" => "2023-08-23 04:19:47",
            ),
            array(
                "id" => 3,
                "key" => "paypal_account_mode",
                "value" => "sandbox",
                "created_at" => "2023-08-19 05:36:53",
                "updated_at" => "2023-08-19 05:36:53",
            ),
            array(
                "id" => 4,
                "key" => "paypal_country",
                "value" => "GB",
                "created_at" => "2023-08-19 05:36:53",
                "updated_at" => "2023-08-19 05:39:44",
            ),
            array(
                "id" => 5,
                "key" => "paypal_currency",
                "value" => "USD",
                "created_at" => "2023-08-19 05:36:53",
                "updated_at" => "2023-08-19 05:36:53",
            ),
            array(
                "id" => 6,
                "key" => "paypal_rate",
                "value" => "1",
                "created_at" => "2023-08-19 05:36:53",
                "updated_at" => "2023-08-19 05:36:53",
            ),
            array(
                "id" => 7,
                "key" => "paypal_api_key",
                "value" => "AUnOIw_wR15MzYo0eg87xjJ4bH2b_fsXVMtVtVZcpJVTrQC_rcStGAjyzBJK40vpaaCnYSvi1Gbf6L9f",
                "created_at" => "2023-08-19 05:36:53",
                "updated_at" => "2023-08-19 07:56:43",
            ),
            array(
                "id" => 8,
                "key" => "paypal_secret_key",
                "value" => "EPrUhxAOGPrnp_5-BkaI6UO0CQMyZ-F4ANGdm3Ye4QZofTuHjyzzJCZm3sP5hiSb4XKlUKOo-ozDddD3",
                "created_at" => "2023-08-19 05:36:53",
                "updated_at" => "2023-08-19 07:56:43",
            ),
            array(
                "id" => 9,
                "key" => "paypal_app_id",
                "value" => "APP_ID",
                "created_at" => "2023-08-21 05:07:55",
                "updated_at" => "2023-08-21 05:07:55",
            ),
            array(
                "id" => 10,
                "key" => "stripe_logo",
                "value" => "/uploads/media_64e30eb5c51eb.png",
                "created_at" => "2023-08-21 07:13:57",
                "updated_at" => "2023-08-21 07:13:57",
            ),
            array(
                "id" => 11,
                "key" => "stripe_status",
                "value" => "1",
                "created_at" => "2023-08-21 07:13:57",
                "updated_at" => "2023-08-21 07:13:57",
            ),
            array(
                "id" => 12,
                "key" => "stripe_country",
                "value" => "US",
                "created_at" => "2023-08-21 07:13:57",
                "updated_at" => "2023-08-21 07:13:57",
            ),
            array(
                "id" => 13,
                "key" => "stripe_currency",
                "value" => "USD",
                "created_at" => "2023-08-21 07:13:57",
                "updated_at" => "2023-08-21 07:13:57",
            ),
            array(
                "id" => 14,
                "key" => "stripe_rate",
                "value" => "1",
                "created_at" => "2023-08-21 07:13:57",
                "updated_at" => "2023-08-21 07:13:57",
            ),
            array(
                "id" => 15,
                "key" => "stripe_api_key",
                "value" => "pk_test_51NhSkBLAjq0ac3am3UhnOZKyJcyh1wHiH4tkIeu60qcYE53YFCeQiD6mvkEcDyR5a8TrnMq0HiMndlflptDDU5cc00NA7t4tNd",
                "created_at" => "2023-08-21 07:13:57",
                "updated_at" => "2023-08-21 07:47:18",
            ),
            array(
                "id" => 16,
                "key" => "stripe_secret_key",
                "value" => "sk_test_51NhSkBLAjq0ac3amThHW5zGEFluTCqirQw3xYwNh2KlYTIoV1nUfj0wXQ1ktXOlooaVRF0M99N7XXnaTBoLX7xgd00suPQpGgI",
                "created_at" => "2023-08-21 07:13:57",
                "updated_at" => "2023-08-21 07:47:18",
            ),
            array(
                "id" => 17,
                "key" => "razorpay_status",
                "value" => "1",
                "created_at" => "2023-08-22 05:45:12",
                "updated_at" => "2023-08-22 05:45:12",
            ),
            array(
                "id" => 18,
                "key" => "razorpay_country",
                "value" => "IN",
                "created_at" => "2023-08-22 05:45:13",
                "updated_at" => "2023-08-22 05:45:13",
            ),
            array(
                "id" => 19,
                "key" => "razorpay_currency",
                "value" => "USD",
                "created_at" => "2023-08-22 05:45:13",
                "updated_at" => "2023-08-22 11:42:34",
            ),
            array(
                "id" => 20,
                "key" => "razorpay_rate",
                "value" => "1",
                "created_at" => "2023-08-22 05:45:13",
                "updated_at" => "2023-08-22 11:42:34",
            ),
            array(
                "id" => 21,
                "key" => "razorpay_api_key",
                "value" => "rzp_test_K7CipNQYyyMPiS",
                "created_at" => "2023-08-22 05:45:13",
                "updated_at" => "2023-08-22 06:42:04",
            ),
            array(
                "id" => 22,
                "key" => "razorpay_secret_key",
                "value" => "zSBmNMorJrirOrnDrbOd1ALO",
                "created_at" => "2023-08-22 05:45:13",
                "updated_at" => "2023-08-22 06:42:04",
            ),
            array(
                "id" => 23,
                "key" => "razorpay_logo",
                "value" => "/uploads/media_64e44b9f4fac0.png",
                "created_at" => "2023-08-22 05:46:07",
                "updated_at" => "2023-08-22 05:46:07",
            ),
        );

        \DB::table('payment_gateway_settings')->insert($payment_gateway_settings);
    }
}
