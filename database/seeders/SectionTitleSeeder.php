<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $section_titles = array(
            array(
                "id" => 4,
                "key" => "why_choose_top_title",
                "value" => "why choose us",
                "created_at" => "2023-07-16 06:04:13",
                "updated_at" => "2023-09-02 10:42:34",
            ),
            array(
                "id" => 5,
                "key" => "why_choose_main_title",
                "value" => "why choose us",
                "created_at" => "2023-07-16 06:04:13",
                "updated_at" => "2023-09-02 10:42:34",
            ),
            array(
                "id" => 6,
                "key" => "why_choose_sub_title",
                "value" => "Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.",
                "created_at" => "2023-07-16 06:05:48",
                "updated_at" => "2023-09-02 10:42:34",
            ),
            array(
                "id" => 7,
                "key" => "daily_offer_top_title",
                "value" => "daily offer",
                "created_at" => "2023-09-02 10:41:02",
                "updated_at" => "2023-09-02 10:41:02",
            ),
            array(
                "id" => 8,
                "key" => "daily_offer_main_title",
                "value" => "up to 75% off for this day",
                "created_at" => "2023-09-02 10:41:02",
                "updated_at" => "2023-09-02 10:41:02",
            ),
            array(
                "id" => 9,
                "key" => "daily_offer_sub_title",
                "value" => "Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.",
                "created_at" => "2023-09-02 10:41:02",
                "updated_at" => "2023-09-02 10:41:02",
            ),
            array(
                "id" => 10,
                "key" => "chef_top_title",
                "value" => "our team",
                "created_at" => "2023-09-04 04:18:09",
                "updated_at" => "2023-09-04 04:18:09",
            ),
            array(
                "id" => 11,
                "key" => "chef_main_title",
                "value" => "meet our expert chefs",
                "created_at" => "2023-09-04 04:18:09",
                "updated_at" => "2023-09-04 04:18:09",
            ),
            array(
                "id" => 12,
                "key" => "chef_sub_title",
                "value" => "Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.",
                "created_at" => "2023-09-04 04:18:09",
                "updated_at" => "2023-09-04 04:18:09",
            ),
            array(
                "id" => 13,
                "key" => "testimonial_top_title",
                "value" => "testimonial",
                "created_at" => "2023-09-05 04:24:02",
                "updated_at" => "2023-09-05 04:24:02",
            ),
            array(
                "id" => 14,
                "key" => "testimonial_main_title",
                "value" => "our customar feedbacks",
                "created_at" => "2023-09-05 04:24:02",
                "updated_at" => "2023-09-05 04:24:02",
            ),
            array(
                "id" => 15,
                "key" => "testimonial_sub_title",
                "value" => "Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.",
                "created_at" => "2023-09-05 04:24:02",
                "updated_at" => "2023-09-05 04:24:02",
            ),
        );

        \DB::table('section_titles')->insert($section_titles);
    }
}
