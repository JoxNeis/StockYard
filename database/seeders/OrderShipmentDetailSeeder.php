<?php

namespace Database\Seeders;

class OrderShipmentDetailSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "order_shipment_details";
        $this->runCSVSeeder("order_shipment_details.csv");
    }
}
