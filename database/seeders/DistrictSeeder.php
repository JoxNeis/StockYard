<?php

namespace Database\Seeders;

class DistrictSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "districts";
        $this->runCSVSeeder("districts.csv");
    }
}
