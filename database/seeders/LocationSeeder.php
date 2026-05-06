<?php

namespace Database\Seeders;

class LocationSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "locations";
        $this->runCSVSeeder("locations.csv");
    }
}
