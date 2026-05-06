<?php

namespace Database\Seeders;

class CustomerSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "customers";
        $this->runCSVSeeder("customers.csv");
    }
}
