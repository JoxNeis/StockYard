<?php

namespace Database\Seeders;

class DivisionSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "divisions";
        $this->runCSVSeeder("divisions.csv");
    }
}
