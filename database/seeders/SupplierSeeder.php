<?php

namespace Database\Seeders;

class SupplierSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "suppliers";
        $this->runCSVSeeder("suppliers.csv");
    }
}
