<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\AlamatDetail;
use App\Models\Picture;
use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Picture::create([
            'path' => 'kotaJakarta.png',
            'type' => 'Provinsi',
        ]);

        Provinsi::create([
            'name' => 'DKI Jakarta',
            'pictureID' => 1,
        ]);

        AlamatDetail::create([
            'kecamatan' => 'Pesanggarahan',
            'kabupaten' => 'Jakarta Selatan',
            'provinsiID' => 1,
            'alamatDetail' => 'Pesanggarahan, Jakarta Selatan',
            'kodePos' => 123456,
        ]);

        Admin::create([
            'name' => 'Admin 1',
            'email' => 'admin1@admin.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('password'),
            'alamatID' => 1,
            'phone' => '12345678',
        ]);
    }
}
