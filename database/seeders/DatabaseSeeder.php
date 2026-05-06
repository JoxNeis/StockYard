<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            DivisionSeeder::class,
            ProvinceSeeder::class,
            CitySeeder::class,
            DistrictSeeder::class,
            SubdistrictSeeder::class,
            ProductSeeder::class,
            CustomerSeeder::class,
            LocationSeeder::class,
            ShipperSeeder::class,
            SupplierSeeder::class,
            EmployeeSeeder::class,
            InventoryMovementSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            OrderShipmentSeeder::class,
            OrderShipmentDetailSeeder::class,
            PurchaseSeeder::class,
            PurchaseDetailSeeder::class,
            PurchaseShipmentSeeder::class,
            PurchaseShipmentDetailSeeder::class,
        ]);
    }
}
