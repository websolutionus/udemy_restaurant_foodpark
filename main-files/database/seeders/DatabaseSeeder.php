<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        $this->call(WhyChooseUsTitleSeeder::class);
        \App\Models\Slider::factory(3)->create();
        \App\Models\WhyChooseUs::factory(3)->create();
        $this->call(CategorySeeder::class);
        \App\Models\Product::factory(10)->create();
        \App\Models\Coupon::factory(3)->create();
        $this->call(MenuBuilderSeeder::class);

    }
}
