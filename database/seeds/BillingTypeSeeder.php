<?php

use Illuminate\Database\Seeder;
use App\BillingType;
class BillingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['title' => 'Overhead Cost', 'parent_id' => 0 ],      
            ['title' => 'Operation Cost', 'parent_id' => 0],
            ['title' => 'Labor Cost', 'parent_id' => 0],
            ['title' => 'Product Cost', 'parent_id' => 0],
            ['title' => 'Others', 'parent_id' => 0],
            ['title' => 'Water Bill', 'parent_id' => 1],
            ['title' => 'Electricity Bill', 'parent_id' => 1],
            ['title' => 'Office Supplies', 'parent_id' => 1],
            ['title' => 'Office Rental', 'parent_id' => 1],
            ['title' => 'Cleaning Materials(Office Use)', 'parent_id' => 1],
            ['title' => 'Sales Revolving Fund', 'parent_id' => 2],
            ['title' => 'Communication Allowance', 'parent_id' => 2],
            ['title' => 'Gasoline', 'parent_id' => 2],
            ['title' => 'Car Maintenance', 'parent_id' => 2],
            ['title' => 'Motorcycle Payment', 'parent_id' => 2],
            ['title' => 'Salary', 'parent_id' => 3],
            ['title' => 'Sticker', 'parent_id' => 4],
            ['title' => 'Box', 'parent_id' => 4],
            ['title' => 'Sacks', 'parent_id' => 4],
            ['title' => 'Plastic', 'parent_id' => 4],
            
            
        ];
    
        foreach ($items as $item) {
            BillingType::create($item);
        }
    }
}
































