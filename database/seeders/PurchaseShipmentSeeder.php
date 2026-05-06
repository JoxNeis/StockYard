<?php

namespace Database\Seeders;

class PurchaseShipmentSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "purchase_shipments";
        $this->runCSVSeeder("purchase_shipments.csv");
    }
}
