<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = array(
            array(
                "id" => 1,
                "key" => "site_name",
                "value" => "Food Park",
                "created_at" => "2023-08-05 10:31:55",
                "updated_at" => "2023-08-06 06:19:16",
            ),
            array(
                "id" => 2,
                "key" => "site_default_currency",
                "value" => "USD",
                "created_at" => "2023-08-05 10:31:55",
                "updated_at" => "2023-08-06 06:56:35",
            ),
            array(
                "id" => 3,
                "key" => "site_currency_icon",
                "value" => "$",
                "created_at" => "2023-08-05 10:31:55",
                "updated_at" => "2023-08-14 03:43:30",
            ),
            array(
                "id" => 4,
                "key" => "site_currency_icon_position",
                "value" => "left",
                "created_at" => "2023-08-05 10:31:55",
                "updated_at" => "2023-08-06 07:30:18",
            ),
            array(
                "id" => 5,
                "key" => "site_delivery_charge",
                "value" => "50",
                "created_at" => "2023-08-14 03:43:44",
                "updated_at" => "2023-08-14 03:43:44",
            ),
            array(
                "id" => 6,
                "key" => "pusher_app_id",
                "value" => "1659217",
                "created_at" => "2023-08-26 10:36:34",
                "updated_at" => "2023-08-26 10:36:34",
            ),
            array(
                "id" => 7,
                "key" => "pusher_key",
                "value" => "be9d8c800e229ec729c6",
                "created_at" => "2023-08-26 10:36:34",
                "updated_at" => "2023-08-26 10:36:34",
            ),
            array(
                "id" => 8,
                "key" => "pusher_secret",
                "value" => "52afd25d2a55c3df77e5",
                "created_at" => "2023-08-26 10:36:34",
                "updated_at" => "2023-08-26 10:36:34",
            ),
            array(
                "id" => 9,
                "key" => "pusher_cluster",
                "value" => "mt1",
                "created_at" => "2023-08-26 10:36:34",
                "updated_at" => "2023-08-26 10:36:34",
            ),
            array(
                "id" => 10,
                "key" => "mail_driver",
                "value" => "smtp",
                "created_at" => "2023-09-10 06:35:57",
                "updated_at" => "2023-09-10 06:44:34",
            ),
            array(
                "id" => 11,
                "key" => "mail_host",
                "value" => "sandbox.smtp.mailtrap.io",
                "created_at" => "2023-09-10 06:35:57",
                "updated_at" => "2023-09-10 06:44:34",
            ),
            array(
                "id" => 12,
                "key" => "mail_port",
                "value" => "2525",
                "created_at" => "2023-09-10 06:35:57",
                "updated_at" => "2023-09-10 06:44:34",
            ),
            array(
                "id" => 13,
                "key" => "mail_username",
                "value" => "808ae887829cf7",
                "created_at" => "2023-09-10 06:35:57",
                "updated_at" => "2023-09-10 06:44:34",
            ),
            array(
                "id" => 14,
                "key" => "mail_password",
                "value" => "188d4565252515",
                "created_at" => "2023-09-10 06:35:57",
                "updated_at" => "2023-09-10 06:44:34",
            ),
            array(
                "id" => 15,
                "key" => "mail_encryption",
                "value" => "tls",
                "created_at" => "2023-09-10 06:35:57",
                "updated_at" => "2023-09-10 06:44:34",
            ),
            array(
                "id" => 16,
                "key" => "mail_from_address",
                "value" => "food_park@example.com",
                "created_at" => "2023-09-10 06:35:57",
                "updated_at" => "2023-09-10 06:44:34",
            ),
            array(
                "id" => 17,
                "key" => "mail_receive_address",
                "value" => "support.food_park@example.com",
                "created_at" => "2023-09-10 06:35:57",
                "updated_at" => "2023-09-10 06:44:34",
            ),
            array(
                "id" => 18,
                "key" => "logo",
                "value" => "/uploads/media_6506cf7d10041.png",
                "created_at" => "2023-09-17 09:27:14",
                "updated_at" => "2023-09-17 10:05:49",
            ),
            array(
                "id" => 19,
                "key" => "footer_logo",
                "value" => "/uploads/media_6506c6d7c44aa.png",
                "created_at" => "2023-09-17 09:27:14",
                "updated_at" => "2023-09-17 09:28:55",
            ),
            array(
                "id" => 20,
                "key" => "favicon",
                "value" => "/uploads/media_6506c6d7c7d39.png",
                "created_at" => "2023-09-17 09:27:14",
                "updated_at" => "2023-09-17 09:28:55",
            ),
            array(
                "id" => 21,
                "key" => "breadcrumb",
                "value" => "/uploads/media_6506c6d7cb7a1.jpg",
                "created_at" => "2023-09-17 09:27:14",
                "updated_at" => "2023-09-17 09:28:55",
            ),
            array(
                "id" => 22,
                "key" => "site_email",
                "value" => "foodpark@gmail.com",
                "created_at" => "2023-09-17 11:18:32",
                "updated_at" => "2023-09-17 11:18:32",
            ),
            array(
                "id" => 23,
                "key" => "site_phone",
                "value" => "+96487452145214",
                "created_at" => "2023-09-17 11:18:32",
                "updated_at" => "2023-09-17 11:18:32",
            ),
            array(
                "id" => 24,
                "key" => "site_color",
                "value" => "#ed7011",
                "created_at" => "2023-09-18 04:02:41",
                "updated_at" => "2023-09-18 04:15:30",
            ),
            array(
                "id" => 25,
                "key" => "seo_title",
                "value" => "Food Park",
                "created_at" => "2023-09-18 05:17:55",
                "updated_at" => "2023-09-18 05:17:55",
            ),
            array(
                "id" => 26,
                "key" => "seo_description",
                "value" => "test description",
                "created_at" => "2023-09-18 05:17:55",
                "updated_at" => "2023-09-18 05:17:55",
            ),
            array(
                "id" => 27,
                "key" => "seo_keywords",
                "value" => "food,restaurant",
                "created_at" => "2023-09-18 05:17:55",
                "updated_at" => "2023-09-18 05:17:55",
            ),
        );

        \DB::table('settings')->insert($settings);
    }
}
