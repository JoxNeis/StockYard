<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends StockYardSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->tableName = "users";
        $this->runCSVSeeder("users.csv");
    }

    protected function modifyData($dataArray): array
    {
        if (isset($dataArray['password'])) {
            $dataArray['hashed_password'] = Hash::make($dataArray['password']);
            unset($dataArray['password']);
        }
        return $dataArray;
    }
}
