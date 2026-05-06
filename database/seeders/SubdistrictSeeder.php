<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubdistrictSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "subdistricts";
        $this->runCSVSeeder("subdistricts.csv");
    }
}
