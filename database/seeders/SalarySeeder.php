<?php

namespace Database\Seeders;

class SalarySeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "salaries";
        $this->runCSVSeeder("salaries.csv");
    }
}
