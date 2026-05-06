<?php

namespace Database\Seeders;

class OrderShipmentSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "order_shipments";
        $this->runCSVSeeder("order_shipments.csv");
    }
}
