<?php

namespace Database\Seeders;

class OrderSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "orders";
        $this->runCSVSeeder("orders.csv");
    }
}
