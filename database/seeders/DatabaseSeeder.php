<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Anime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::deleteDirectory('public/portadas');
        Storage::makeDirectory('public/portadas');

        Storage::deleteDirectory('public/profilePhoto');
        Storage::makeDirectory('public/profilePhoto');

        Anime::factory(12)->create();
        $this->call(UserSeeder::class);
    }
}
