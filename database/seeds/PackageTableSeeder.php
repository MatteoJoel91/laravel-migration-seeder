<?php

use App\Package;
use Illuminate\Database\Seeder;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = new Package();

        $package->package_number = '12';
        $package->name = 'Vacanza test';
        $package->description = null;
        $package->price = 2000;

        $package->save();
    }
}
