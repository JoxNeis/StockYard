<?php

namespace Database\Seeders;

class OrderDetailSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "order_details";
        $this->runCSVSeeder("order_details.csv");
    }
}
