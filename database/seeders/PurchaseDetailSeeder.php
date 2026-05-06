<?php

namespace Database\Seeders;

class PurchaseDetailSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "purchase_details";
        $this->runCSVSeeder("purchase_details.csv");
    }
}
