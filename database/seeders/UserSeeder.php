<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Rafa';
        $user->email = 'rafa@gmail.com';
        $user->password = bcrypt('rafa1234');
        $user->description = 'Hola!! Soy Rafael un estudiante de la carrera de Ingeniería en Desarrollo de Software Multiplataforma.';
        $user->profile_photo_path = 'profilePhoto/' . fake()->image('public/storage/profilePhoto', 640, 480, null, false);

        $user->save();
    }
}
