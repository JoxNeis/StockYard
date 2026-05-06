<?php

namespace Database\Seeders;

class PurchaseSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "purchases";
        $this->runCSVSeeder("purchases.csv");
    }
}
