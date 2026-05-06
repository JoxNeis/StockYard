<?php

namespace Database\Seeders;

class ProvinceSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "provinces";
        $this->runCSVSeeder("provinces.csv");
    }
}
