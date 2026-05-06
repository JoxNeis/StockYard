<?php

namespace Database\Seeders;

class CitySeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "cities";
        $this->runCSVSeeder("cities.csv");
    }
}
