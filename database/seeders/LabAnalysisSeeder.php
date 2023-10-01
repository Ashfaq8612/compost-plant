<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin\LabAnalysisModel;
use Carbon\Carbon;

class LabAnalysisSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'windrows_code' => 'WR001',
                'analysis_date' => Carbon::now()->subDays(5),
                'analysis_complete_date' => Carbon::now()->subDays(3),
                'compositions' => 'Sample Composition 1',
                'no_of_days' => 10,
                'avg_temp' => 25.5,
                'moisture' => 0.12,
                'organic_matter' => 0.8,
                'ph_value' => 7.5,
                'elect_conductivity' => 120,
                'total_dissolve_salt' => 0.3,
                'cec' => 10.5,
            ],
            [
                'windrows_code' => 'WR002',
                'analysis_date' => Carbon::now()->subDays(8),
                'analysis_complete_date' => Carbon::now()->subDays(4),
                'compositions' => 'Sample Composition 2',
                'no_of_days' => 12,
                'avg_temp' => 27.2,
                'moisture' => 0.15,
                'organic_matter' => 0.7,
                'ph_value' => 6.8,
                'elect_conductivity' => 110,
                'total_dissolve_salt' => 0.2,
                'cec' => 9.8,
            ],
            // Add more data entries as needed
        ];

        LabAnalysisModel::insert($data);
    }
}
