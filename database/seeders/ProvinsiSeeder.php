<?php

namespace Database\Seeders;

use App\Models\Picture;
use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Picture::create([
            'path' => 'Provinsi/Jakarta.png',
            'type' => 'Provinsi',
        ]);

        Provinsi::create([
            'name' => 'DKI Jakarta',
            'pictureID' => 1,
        ]);

        Picture::create([
            'path' => 'Provinsi/Bandung.png',
            'type' => 'Provinsi',
        ]);

        Provinsi::create([
            'name' => 'Bandung',
            'pictureID' => 2,
        ]);

        Picture::create([
            'path' => 'Provinsi/Denpasar.png',
            'type' => 'Provinsi',
        ]);

        Provinsi::create([
            'name' => 'Denpasar',
            'pictureID' => 3,
        ]);

        Picture::create([
            'path' => 'Provinsi/Malang.png',
            'type' => 'Provinsi',
        ]);

        Provinsi::create([
            'name' => 'Malang',
            'pictureID' => 4,
        ]);

        Picture::create([
            'path' => 'Provinsi/Medan.png',
            'type' => 'Provinsi',
        ]);

        Provinsi::create([
            'name' => 'Medan',
            'pictureID' => 5,
        ]);

        Picture::create([
            'path' => 'Provinsi/Surabaya.png',
            'type' => 'Provinsi',
        ]);

        Provinsi::create([
            'name' => 'Surabaya',
            'pictureID' => 6,
        ]);

        Picture::create([
            'path' => 'Provinsi/Semarang.png',
            'type' => 'Provinsi',
        ]);

        Provinsi::create([
            'name' => 'Semarang',
            'pictureID' => 5,
        ]);

        Picture::create([
            'path' => 'Provinsi/Yogyakarta.png',
            'type' => 'Provinsi',
        ]);

        Provinsi::create([
            'name' => 'Yogyakarta',
            'pictureID' => 5,
        ]);
    }
}
