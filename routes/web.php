<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\WindrowController;
use App\Http\Controllers\Admin\Sales5kgController;
use App\Http\Controllers\Admin\BulkSalesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\Sales20kgController;
use App\Http\Controllers\Admin\LabAnalysisController;
use App\Http\Controllers\Admin\SievingUnitController;
use App\Http\Controllers\Admin\WasteIntakeController;
use App\Http\Controllers\Admin\Inventory5kgController;
use App\Http\Controllers\Admin\HumanResourceController;
use App\Http\Controllers\Admin\Inventory20kgController;
use App\Http\Controllers\Admin\PlantOperationController;
use App\Http\Controllers\Admin\ScreenCombustibleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register','registerSave')->name('register.save');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});


Route::middleware('auth')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //Routes For Wsste Intakes
    Route::get('/waste_intakes', [WasteIntakeController::class, 'index'])->name('waste_intakes.index');
    Route::get('/waste_intakes/create', [WasteIntakeController::class,'create'])->name('waste_intakes.create');
    Route::post('/waste_intakes', [WasteIntakeController::class,'store'])->name('waste_intakes.store');
    Route::get('/waste_intakes/{id}', [WasteIntakeController::class,'show'])->name('waste_intakes.show');
    Route::get('/waste_intakes/{id}/edit', [WasteIntakeController::class,'edit'])->name('waste_intakes.edit');
    Route::put('/waste_intakes/{id}', [WasteIntakeController::class,'update'])->name('waste_intakes.update');
    Route::delete('/waste_intakes/{id}', [WasteIntakeController::class,'destroy'])->name('waste_intakes.destroy');


    // Routes For Screen Combustible
    Route::get('/screen-combustible', [ScreenCombustibleController::class, 'index'])->name('screen_combustible.index');
    Route::get('/screen-combustible/create', [ScreenCombustibleController::class, 'create'])->name('screen_combustible.create');
    Route::post('/screen-combustible', [ScreenCombustibleController::class, 'store'])->name('screen_combustible.store');
    Route::get('/screen-combustible/{id}', [ScreenCombustibleController::class, 'show'])->name('screen_combustible.show');
    Route::get('/screen-combustible/{screenedcombustible}/edit', [ScreenCombustibleController::class, 'edit'])->name('screen_combustible.edit');
    Route::put('/screen-combustible/{screenedcombustible}', [ScreenCombustibleController::class, 'update'])->name('screen_combustible.update');
    Route::delete('/screen-combustible/{id}', [ScreenCombustibleController::class, 'destroy'])->name('screen_combustible.destroy');

    //Routes For H.R
    Route::get('/human_resource', [HumanResourceController::class, 'index'])->name('human_resource.index');
    Route::get('/human_resource/create', [HumanResourceController::class, 'create'])->name('human_resource.create');
    Route::post('/human_resource', [HumanResourceController::class, 'store'])->name('human_resource.store');
    Route::get('/human_resource/{humanResource}', [HumanResourceController::class, 'show'])->name('human_resource.show');
    Route::get('/human_resource/{humanResource}/edit', [HumanResourceController::class, 'edit'])->name('human_resource.edit');
    Route::put('/human_resource/{humanResource}', [HumanResourceController::class, 'update'])->name('human_resource.update');
    Route::delete('/human_resource/{humanResource}', [HumanResourceController::class, 'destroy'])->name('human_resource.destroy');

    // Routes for plant OPeration
    Route::get('/plant_operations', [PlantOperationController::class, 'index'])->name('plant_operations.index');
    Route::get('/plant_operations/create', [PlantOperationController::class, 'create'])->name('plant_operations.create');
    Route::post('/plant_operations', [PlantOperationController::class, 'store'])->name('plant_operations.store');
    Route::get('/plant_operations/{id}', [PlantOperationController::class, 'show'])->name('plant_operations.show');
    Route::get('/plant_operations/{id}/edit', [PlantOperationController::class, 'edit'])->name('plant_operations.edit');
    Route::put('/plant_operations/{id}', [PlantOperationController::class, 'update'])->name('plant_operations.update');
    Route::delete('/plant_operations/{id}', [PlantOperationController::class, 'destroy'])->name('plant_operations.destroy');


    // Routes for windrows Installation
    Route::get('/windrows_installation', [WindrowController::class, 'index'])->name('windrows_installation.index');
    Route::get('/windrows_installation/create', [WindrowController::class, 'create'])->name('windrows_installation.create');
    Route::post('/windrows_installation', [WindrowController::class, 'store'])->name('windrows_installation.store');
    Route::get('/windrows_installation/{id}', [WindrowController::class, 'show'])->name('windrows_installation.show');
    Route::get('/windrows_installation/{id}/edit', [WindrowController::class, 'edit'])->name('windrows_installation.edit');
    Route::put('/windrows_installation/{id}', [WindrowController::class, 'update'])->name('windrows_installation.update');
    Route::delete('/windrows_installation/{id}', [WindrowController::class, 'destroy'])->name('windrows_installation.destroy');

    //Routes for Lab Analysis
    Route::get('/lab_analysis', [LabAnalysisController::class, 'index'])->name('lab_analysis.index');
    Route::get('/lab_analysis/{id}', [LabAnalysisController::class, 'show'])->name('lab_analysis.show');
    Route::get('/lab/analysis/add', [LabAnalysisController::class, 'create'])->name('lab_analysis.create');
    Route::post('/lab_analysis', [LabAnalysisController::class, 'store'])->name('lab_analysis.store');
    Route::get('/lab_analysis/{id}/edit', [LabAnalysisController::class, 'edit'])->name('lab_analysis.edit');
    Route::put('/lab_analysis/{id}', [LabAnalysisController::class, 'update'])->name('lab_analysis.update');
    Route::delete('/lab_analysis/{id}', [LabAnalysisController::class, 'destroy'])->name('lab_analysis.destroy');


    Route::get('/sieving-units/listing', [SievingUnitController::class, 'index'])->name('sieving-units.index');
    Route::get('/sieving-units/{id}', [SievingUnitController::class, 'show'])->name('sieving-units.show');
    Route::get('/sieving-units/add/record', [SievingUnitController::class, 'create'])->name('sieving-units.create');
    Route::post('/sieving-units', [SievingUnitController::class, 'store'])->name('sieving-units.store');
    Route::get('/sieving-units/{id}/edit', [SievingUnitController::class, 'edit'])->name('sieving-units.edit');
    Route::put('/sieving-units/{id}', [SievingUnitController::class, 'update'])->name('sieving-units.update');
    Route::delete('/sieving-units/{id}/delete', [SievingUnitController::class, 'destroy'])->name('sieving-units.destroy');



    Route::get('bulk_inventories', [InventoryController::class, 'index'])->name('inventories.index');
    Route::get('bulk_inventories/create', [InventoryController::class, 'create'])->name('inventories.create');
    Route::post('bulk_inventories', [InventoryController::class, 'store'])->name('inventories.store');
    Route::get('bulk_inventories/{id}', [InventoryController::class, 'show'])->name('inventories.show');
    Route::get('bulk_inventories/{id}/edit', [InventoryController::class, 'edit'])->name('inventories.edit');
    Route::put('bulk_inventories/{id}/update', [InventoryController::class, 'update'])->name('inventories.update');
    Route::delete('bulk_inventories/{id}/delete', [InventoryController::class, 'destroy'])->name('inventories.destroy');



    Route::get('inventories5kg/create', [Inventory5kgController::class, 'create'])->name('inventories5kg.create');
    Route::get('inventories5kg', [Inventory5kgController::class, 'index'])->name('inventories5kg.index');
    Route::post('inventories5kg', [Inventory5kgController::class, 'store'])->name('inventories5kg.store');
    Route::get('inventories5kg/{id}', [Inventory5kgController::class, 'show'])->name('inventories5kg.show');
    Route::get('inventories5kg/{id}/edit', [Inventory5kgController::class, 'edit'])->name('inventories5kg.edit');
    Route::put('inventories5kg/{id}/update', [Inventory5kgController::class, 'update'])->name('inventories5kg.update');
    Route::delete('inventories5kg/{id}/delete', [Inventory5kgController::class, 'destroy'])->name('inventories5kg.destroy');



    Route::get('inventories20kg', [Inventory20kgController::class, 'index'])->name('inventories20kg.index');
    Route::get('inventories20kg/create', [Inventory20kgController::class, 'create'])->name('inventories20kg.create');
    Route::post('inventories20kg', [Inventory20kgController::class, 'store'])->name('inventories20kg.store');
    Route::get('inventories20kg/{id}', [Inventory20kgController::class, 'show'])->name('inventories20kg.show');
    Route::get('inventories20kg/{id}/edit', [Inventory20kgController::class, 'edit'])->name('inventories20kg.edit');
    Route::put('inventories20kg/{id}/update', [Inventory20kgController::class, 'update'])->name('inventories20kg.update');
    Route::delete('inventories20kg/{id}/delete', [Inventory20kgController::class, 'destroy'])->name('inventories20kg.destroy');


    // sales route
    Route::resource('bulk_sales', BulkSalesController::class);
    Route::resource('sales_5kg', Sales5kgController::class);
    Route::resource('sales_20kg', Sales20kgController::class);

});



Route::get('/reports', [DashboardController::class, 'reports'])->name('reports');



