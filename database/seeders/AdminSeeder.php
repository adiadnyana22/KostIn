<?php

namespace Database\Seeders;

use App\Models\AlamatDetail;
use App\Models\Picture;
use App\Models\Provinsi;
use App\Models\User;
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

        AlamatDetail::create([
            'kecamatan' => 'Pesanggarahan',
            'kabupaten' => 'Jakarta Selatan',
            'provinsiID' => 1,
            'alamatDetail' => 'Pesanggarahan, Jakarta Selatan',
            'kodePos' => 123456,
        ]);

        User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@admin.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('password'),
            'alamatID' => 1,
            'phone' => '12345678',
            'roleID' => 1,
        ]);
    }
}
