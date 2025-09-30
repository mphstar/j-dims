<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeder.
     */
    public function run(): void
    {
        // Clear existing settings
        Setting::truncate();
        
        // Create default setting - you can change this to 'row' to test carousel
        Setting::create([
            'style' => 'row' // Change to 'row' for carousel layout
        ]);
    }
}
