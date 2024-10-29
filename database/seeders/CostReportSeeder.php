<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CostReport;

class CostReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['adnet' => 'SMD', 'conversion1' => 0, 'conversion2' => 98, 'cost1' => 150.00, 'cost2' => 44.67],
            ['adnet' => 'LIG', 'conversion1' => 75, 'conversion2' => 77, 'cost1' => 167.89, 'cost2' => 55.76],
            ['adnet' => 'ADC', 'conversion1' => 98, 'conversion2' => 56, 'cost1' => 44.76, 'cost2' => 77.98],
            ['adnet' => 'REA', 'conversion1' => 76, 'conversion2' => 14, 'cost1' => 36.89, 'cost2' => 45.90],
            ['adnet' => 'MARVEL', 'conversion1' => 10, 'conversion2' => 66, 'cost1' => 89.76, 'cost2' => 99.87],
            ['adnet' => 'KEN', 'conversion1' => 98, 'conversion2' => 77, 'cost1' => 41.65, 'cost2' => 49.07],
            ['adnet' => 'ADCUSTA', 'conversion1' => 77, 'conversion2' => 98, 'cost1' => 88.76, 'cost2' => 37.98],
            ['adnet' => 'PRT', 'conversion1' => 15, 'conversion2' => 64, 'cost1' => 55.98, 'cost2' => 67.98],
            ['adnet' => 'MBP', 'conversion1' => 16, 'conversion2' => 35, 'cost1' => 55.66, 'cost2' => 33.55],
            ['adnet' => 'TFC', 'conversion1' => 10, 'conversion2' => 27, 'cost1' => 55.78, 'cost2' => 31.23],
        ];

        foreach ($data as $item) {
            CostReport::create($item);
        }
    }
}
