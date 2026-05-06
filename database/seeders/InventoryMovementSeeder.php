<?php

namespace Database\Seeders;

class InventoryMovementSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "inventory_movements";
        $this->runCSVSeeder("inventory_movements.csv");
    }
}
