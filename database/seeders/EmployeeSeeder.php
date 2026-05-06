<?php

namespace Database\Seeders;

class EmployeeSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "employees";
        $this->runCSVSeeder("employees.csv");
    }

    protected function modifyData($dataArray): array
    {
        if (isset($dataArray['head_id'])) {
            if ($dataArray['head_id'] === "") {
                $dataArray['head_id'] = null;
            }
        }
        return $dataArray;
    }
}
