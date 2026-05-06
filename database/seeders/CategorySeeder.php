<?php

namespace Database\Seeders;
class CategorySeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "categories";
        $this->runCSVSeeder("categories.csv");
    }
}
