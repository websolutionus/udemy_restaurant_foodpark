<?php

namespace Database\Seeders;

use App\Models\SectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhyChooseUsTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionTitle::insert([
            [
                'key' => 'why_choose_top_title',
                'value' => 'why choose us'
            ],
            [
                'key' => 'why_choose_main_title',
                'value' => 'why choose us'
            ],
            [
                'key' => 'why_choose_sub_title',
                'value' => 'Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.'
            ]

        ]);
    }
}
