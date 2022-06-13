<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Seeder;

class FacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facility::create([
            'name' => "<i class='bx bx-bed' ></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bx-bath' ></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bx-bath' ></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bx-wifi' ></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bxs-washer'></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bx-wind' ></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bx-cabinet'></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bxs-dock-bottom'></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bx-chair' ></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bxs-parking' ></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bx-fridge'></i>",
        ]);

        Facility::create([
            'name' => "<i class='bx bxs-bolt-circle'></i>",
        ]);
    }
}
