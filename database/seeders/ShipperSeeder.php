<?php

namespace Database\Seeders;

class ShipperSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "shippers";
        $this->runCSVSeeder("shippers.csv");
    }
}
