<?php

namespace Database\Seeders;

class PurchaseShipmentDetailSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "purchase_shipment_details";
        $this->runCSVSeeder("purchase_shipment_details.csv");
    }
}
