<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //SECTION TO SEED FOR VEHICLE SMALL MASTERS

        $this->call(VehicleTypeSeeder::class);
        $this->call(VehicleCapacitySeeder::class);
        $this->call(VehicleBodyTypeSeeder::class);
        $this->call(VehicleInfoSeeder::class);
        $this->call(DriverTypeSeeder::class);
        $this->call(DriverInfoSeeder::class);

        $this->call(DivisionSeeder::class); // Added By Alwin
        $this->call(UomSeeder::class); // Added By Alwin
        $this->call(MaterialDescriptionSeeder::class); // Added By Alwin
        $this->call(DepartmentSeeder::class); // Added By Alwin
        $this->call(DesignationSeeder::class); // Added By Alwin

        $this->call(ShedTypeSeeder::class); // Added By Saravana Sai
        $this->call(ShedInfoSeeder::class); // Added By Saravana Sai
        $this->call(VendorInfoSeeder::class); // Added By Saravana Sai
        $this->call(DieselVendorSeeder::class); // Added By Saravana Sai
         // \App\Models\User::factory(10)->create();
         $this->call(UserSeeder::class);


    }
}
