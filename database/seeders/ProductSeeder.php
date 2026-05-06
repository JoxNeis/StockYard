<?php

namespace Database\Seeders;

class ProductSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "products";
        $this->runCSVSeeder("products.csv");
    }
}
