<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\Admin\LabAnalysisModel;
use App\Models\Admin\WindrowsInstallation;

class UpdateDays extends Command
{

    protected $signature = 'records:update';
    protected $description = 'Update the number of days for records in progress';

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Updating records in progress...');

        $inProgressRecords = WindrowsInstallation::where('status', 'inprogress')->get();
        if(!empty($inProgressRecords)){
            foreach ($inProgressRecords as $record)
            {
                $startDate = Carbon::parse($record->installation_date);
                $currentDate = now();
                $numberOfDays = $startDate->diffInDays($currentDate);

                // Update the WindrowsInstallation table
                $record->update([
                    'no_of_days' => $numberOfDays
                ]);

                // Update the joined LabAnalysis table
                $labAnalysisRecords = LabAnalysisModel::where('windrows_code', $record->id)->get();
                if(!empty($labAnalysisRecords))
                {
                    foreach ($labAnalysisRecords as $labAnalysis) {
                        $labAnalysis->update([
                            'no_of_days' => $numberOfDays
                        ]);
                    }
                }
            }
        }

        $this->info('Records updated successfully.');
    }
}
