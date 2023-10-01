<?php
namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin\Inventory5kg;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\BulkInventory;
use App\Models\Admin\HumanResource;
use App\Models\Admin\Inventory20kg;
use App\Http\Controllers\Controller;
use App\Models\Admin\WindrowsInstallation;
use App\Models\Admin\ScreenedConbustibleMaterial;

class DashboardController extends Controller
{
    public function index()
    {
        $bulk_stock = BulkInventory::orderBy('date', 'DESC')->first();
        $wasteIntakesData = $this->getDashboardData('waste_intakes', 'date', ['total']);
        $bailCreated = $this->getDashboardData('screened_conbustible_materials', 'date', ['bail_created']);
        $solidMaterial = $this->getDashboardData('screened_conbustible_materials', 'date', ['total_scm_received']);


        $stock5kg = Inventory5kg::orderBy('date', 'DESC')->first();
        $stock20kg = Inventory20kg::orderBy('date', 'DESC')->first();
        $production5kg = $this->getDashboardData('inventory5kgs', 'date',['production']);
        $production20kg = $this->getDashboardData('inventory20kgs', 'date',['production']);
        $bulk_production = $this->getDashboardData('bulk_inventories', 'date',['production']);
        $productionSums = $this->calculateStockSums($production5kg, $production20kg, $bulk_production , 'production_sum');


        $dispatch5kg = $this->getDashboardData('inventory5kgs', 'date',['dispatch']);
        $dispatch20kg = $this->getDashboardData('inventory20kgs', 'date',['dispatch']);
        $bulk_dispatch = $this->getDashboardData('bulk_inventories', 'date',['dispatch']);
        $dispatchSums = $this->calculateStockSums($dispatch5kg, $dispatch20kg, $bulk_dispatch , 'dispatch_sum');

        $plantOperations = $this->getDashboardData('plant_operations', 'date', ['operation_time_hr']);
        $wasteProcessing = $this->getDashboardData('plant_operations', 'date', ['waste_processing']);

        $attendance = HumanResource::where('date', Carbon::today())->first();
        $windrows = WindrowsInstallation::where('status', 'inprogress')->count();
        return view('dashboard', compact('wasteIntakesData', 'solidMaterial', 'bailCreated', 'plantOperations','wasteProcessing', 'productionSums', 'dispatchSums','bulk_stock','stock20kg', 'stock5kg', 'attendance', 'windrows'));
    }

    public function reports()
    {
        $bulk_stock = BulkInventory::orderBy('date', 'DESC')->first();
        $wasteIntakesData = $this->getDashboardData('waste_intakes', 'date', ['total']);
        $bailCreated = $this->getDashboardData('screened_conbustible_materials', 'date', ['bail_created']);
        $solidMaterial = $this->getDashboardData('screened_conbustible_materials', 'date', ['total_scm_received']);

        $stock5kg = Inventory5kg::orderBy('date', 'DESC')->first();
        $stock20kg = Inventory20kg::orderBy('date', 'DESC')->first();
        $production5kg = $this->getDashboardData('inventory5kgs', 'date',['production']);
        $production20kg = $this->getDashboardData('inventory20kgs', 'date',['production']);
        $bulk_production = $this->getDashboardData('bulk_inventories', 'date',['production']);
        $productionSums = $this->calculateStockSums($production5kg, $production20kg, $bulk_production , 'production_sum');


        $dispatch5kg = $this->getDashboardData('inventory5kgs', 'date',['dispatch']);
        $dispatch20kg = $this->getDashboardData('inventory20kgs', 'date',['dispatch']);
        $bulk_dispatch = $this->getDashboardData('bulk_inventories', 'date',['dispatch']);
        $dispatchSums = $this->calculateStockSums($dispatch5kg, $dispatch20kg, $bulk_dispatch , 'dispatch_sum');

        $plantOperations = $this->getDashboardData('plant_operations', 'date', ['operation_time_hr']);
        $wasteProcessing = $this->getDashboardData('plant_operations', 'date', ['waste_processing']);

        $attendance = HumanResource::where('date', Carbon::today())->first();
        $windrows = WindrowsInstallation::where('status', 'inprogress')->count();
        return view('report', compact('wasteIntakesData', 'solidMaterial', 'bailCreated', 'plantOperations','wasteProcessing', 'productionSums', 'dispatchSums','bulk_stock','stock20kg', 'stock5kg', 'attendance','windrows'));
    }

    private function getDashboardData($tableName, $dateColumn, $columns, $isToday = false)
    {
        $yesterday = $isToday ? Carbon::today() : Carbon::yesterday();
        $startOfLastMonth = Carbon::now()->subMonth()->startOfMonth();
        $endOfLastMonth = Carbon::now()->subMonth()->endOfMonth();
        $startOfCurrentMonth = Carbon::now()->startOfMonth();
        $yesterdaySum = $this->sumValuesForDateRange($tableName, $dateColumn, $columns, $yesterday, $yesterday);
        $lastMonthSum = $this->sumValuesForDateRange($tableName, $dateColumn, $columns, $startOfLastMonth, $endOfLastMonth);
        $currentMonthSum = $this->sumValuesForDateRange($tableName, $dateColumn, $columns, $startOfCurrentMonth, Carbon::now());

        return [
            'yesterday' => $yesterdaySum,
            'lastMonth' => $lastMonthSum,
            'currentMonth' => $currentMonthSum,
        ];
    }

    private function sumValuesForDateRange($tableName, $dateColumn, $columns, $startDate, $endDate)
    {
        $query = DB::table($tableName)
            ->whereBetween($dateColumn, [$startDate, $endDate]);

        foreach ($columns as $column) {
            $query->addSelect(DB::raw("SUM($column) as {$column}_sum"));
        }

        return $query->first();
    }





    private function calculateStockSums($stock5kg, $stock20kg, $bulk_stock, $column)
    {
        $convertToTons = function ($valueInKg) {
            return $valueInKg / 1000;
        };

        $available5kg = [
            'yesterday' => $convertToTons($stock5kg['yesterday']->$column),
            'lastMonth' => $convertToTons($stock5kg['lastMonth']->$column),
            'currentMonth' => $convertToTons($stock5kg['currentMonth']->$column)
        ];

        $available20kg = [
            'yesterday' => $convertToTons($stock20kg['yesterday']->$column),
            'lastMonth' => $convertToTons($stock20kg['lastMonth']->$column),
            'currentMonth' => $convertToTons($stock20kg['currentMonth']->$column)
        ];

        $availablebulk = [
            'yesterday' => $bulk_stock['yesterday']->$column,
            'lastMonth' => $bulk_stock['lastMonth']->$column,
            'currentMonth' => $bulk_stock['currentMonth']->$column
        ];

        $yesterdaysum = $available5kg['yesterday'] + $available20kg['yesterday'] + $availablebulk['yesterday'];
        $lastmonthsum = $available5kg['lastMonth'] + $available20kg['lastMonth'] + $availablebulk['lastMonth'];
        $currentMonthsum = $available5kg['currentMonth'] + $available20kg['currentMonth'] + $availablebulk['currentMonth'];

        $result = [
            'yesterdaysum' => $yesterdaysum,
            'lastmonthsum' => $lastmonthsum,
            'currentMonthsum' => $currentMonthsum
        ];

        return $result;
    }



}
