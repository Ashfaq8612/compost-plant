@extends('layouts.app')
@section('title', 'Dashboard')
@section('contents')


    <!-- Start content -->
<div class="container-fluid" >
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h4 class="page-title">Compost Plant - Dashboard</h4>
                    <!--    <ol class="breadcrumb">-->
                    <!--        <li class="breadcrumb-item active">Welcome Compost Plant</li>-->
                    <!--    </ol>-->
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="page-content-wrapper">
                <div class="row mt-5">
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <h6 class="text-uppercase mt-0 text-white-50">Waste Intake</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mini-stat-desc">
                                            <div class="text-white">
                                                <p class="text-white-100">Yesterday</p>
                                                <h5 class="mb-3 mt-0">{{$wasteIntakesData['yesterday']->total_sum ?? 0}} : MT</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mini-stat-desc">
                                        <div class="text-white">
                                            <p class="text-white-100">Current Month</p>
                                            <h5 class="mb-3 mt-0">{{$wasteIntakesData['currentMonth']->total_sum ?? 0}} : MT</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="mini-stat-desc">
                                        <div class="text-white">
                                            <p class="text-white-100">Last Month</p>
                                            <h5 class="mb-3 mt-0">{{$wasteIntakesData['lastMonth']->total_sum ?? 0}} : MT</h5>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-buffer display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-info mini-stat position-relative">
                            <div class="card-body">
                                <h6 class="text-uppercase mt-0 text-white-50">Bail Created</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mini-stat-desc">
                                            <div class="text-white">
                                                <p class="text-white-100">Yesterday</p>
                                                <h5 class="mb-3 mt-0">{{$bailCreated['yesterday']->bail_created_sum ?? 0}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mini-stat-desc">
                                        <div class="text-white">
                                            <p class="text-white-100">Current Month</p>
                                            <h5 class="mb-3 mt-0">{{$bailCreated['currentMonth']->bail_created_sum ?? 0}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="mini-stat-desc">
                                        <div class="text-white">
                                            <p class="text-white-100">Last Month</p>
                                            <h5 class="mb-3 mt-0">{{$bailCreated['lastMonth']->bail_created_sum ?? 0}}</h5>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-buffer display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-danger mini-stat position-relative">
                            <div class="card-body">
                                <h6 class="text-uppercase mt-0 text-white-50">SCM Stock</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mini-stat-desc">
                                            <div class="text-white">
                                                <p class="text-white-100">Yesterday</p>
                                                <h5 class="mb-3 mt-0">{{$solidMaterial['yesterday']->total_scm_received_sum ?? 0}} : MT</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mini-stat-desc">
                                        <div class="text-white">
                                            <p class="text-white-100">Current Month</p>
                                            <h5 class="mb-3 mt-0">{{$solidMaterial['currentMonth']->total_scm_received_sum ?? 0}} : MT</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                        <div class="mini-stat-desc">
                                        <div class="text-white">
                                            <p class="text-white-100">Last Month</p>
                                            <h5 class="mb-3 mt-0">{{$solidMaterial['lastMonth']->total_scm_received_sum ?? 0}} : MT</h5>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-buffer display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row">

                    <div class="col-md-4">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white">Production</h6>
                                    <h6 class="text-uppercase mt-0 text-white">Production</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-white">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Yesterday</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{$productionSums['yesterdaysum'] ?? 0}} : MT</h3>

                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Current Month</h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{$productionSums['currentMonthsum'] ?? 0}} : MT</h3>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Last Month</h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{$productionSums['lastmonthsum'] ?? 0}} : MT</h3>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="text-white">
                                        <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="card bg-info mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white">Dispatch - Beliya</h6>
                                    <h6 class="text-uppercase mt-0 text-white">Dispatch - Beliya</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-white">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Yesterday</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{$dispatchSums['yesterdaysum'] ?? 0}} : MT</h3>

                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Current Month</h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{$dispatchSums['currentMonthsum'] ?? 0}} : MT</h3>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Last Month</h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{$dispatchSums['lastmonthsum'] ?? 0}} : MT</h3>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="text-white">
                                        <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="card bg-danger mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white">Balance</h6>
                                    <h6 class="text-uppercase mt-0 text-white">Beliya -  Stock</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-white">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Bulk Stock</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{ $bulk_stock->balance ?? 0}} : MT</h3>

                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">5 Kg Bags</h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{ $stock5kg->balance_bags ?? 0}} - Bags</h3>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">20 KG Bags</h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{ $stock20kg->balance_bags ?? 0}} - Bags</h3>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-white">
                                        <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row">

                    <div class="col-md-4">
                        <div class="card bg-primary mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white">Human Resource</h6>
                                    <h6 class="text-uppercase mt-0 text-white">Human Resource</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-white">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Today's</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Attendance</h5>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Present Employee</h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{ $attendance->present_employees ?? 0}}</h3>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Absent Employees</h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{ $attendance->absent_employees ?? 0}}</h3>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="text-white">
                                        <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="card bg-info mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white">Plant Operation</h6>
                                    <h6 class="text-uppercase mt-0 text-white">Plant Operation</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-white">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Yesterday</h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{$plantOperations['yesterday']->operation_time_hr_sum ?? 0}} : hrs</h3>

                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Current Month</h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{$plantOperations['currentMonth']->operation_time_hr_sum ?? 0}} : hrs</h3>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left">Last Month</h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left">{{$plantOperations['lastMonth']->operation_time_hr_sum ?? 0}} : hrs</h3>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <div class="text-white">
                                        <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="card bg-danger mini-stat position-relative">
                            <div class="card-body">
                                <div class="mini-stat-desc">
                                    <h6 class="text-uppercase verti-label text-white">Windrows</h6>
                                    <h6 class="text-uppercase mt-0 text-white">Windrows In Progress</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-white">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left"></h5>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left"></h3>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h4 class="mb-3 mt-0 text-left">Windrows In Progress</h4>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4 class="mb-3 mt-0 text-left">{{ $windrows ?? 0}}</h4>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="mb-3 mt-0 text-left"></h5>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3 class="mb-3 mt-0 text-left"></h3>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-white">
                                        <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                                    </div>
                                    <div class="mini-stat-icon">
                                        <i class="mdi mdi-cube-outline display-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->



                <div class="row">
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-8 border-right">
                                        <h4 class="mt-0 header-title mb-4">Production Report</h4>
                                        <div id="morris-area-example" class="dashboard-charts morris-charts"></div>
                                    </div>
                                    <div class="col-xl-4">
                                        <h4 class="header-title mb-4">Yearly Production Report</h4>
                                        <div class="p-3">
                                            <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-first-tab" data-toggle="pill" href="#pills-first" role="tab" aria-controls="pills-first" aria-selected="true">2019</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-second-tab" data-toggle="pill" href="#pills-second" role="tab" aria-controls="pills-second" aria-selected="false">2020</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-third-tab" data-toggle="pill" href="#pills-third" role="tab" aria-controls="pills-third" aria-selected="false">2021</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="pills-first" role="tabpanel" aria-labelledby="pills-first-tab">
                                                    <div class="p-3">
                                                        <h2>17,562</h2>
                                                        <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus Nullam quis ante.</p>
                                                        <a href="#" class="text-primary">Read more...</a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="pills-second" role="tabpanel" aria-labelledby="pills-second-tab">
                                                    <div class="p-3">
                                                        <h2>18,614</h2>
                                                        <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus Nullam quis ante.</p>
                                                        <a href="#" class="text-primary">Read more...</a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="pills-third" role="tabpanel" aria-labelledby="pills-third-tab">
                                                    <div class="p-3">
                                                        <h2>19,752</h2>
                                                        <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus Nullam quis ante.</p>
                                                        <a href="#" class="text-primary">Read more...</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title mb-4">Production Analytics</h4>
                                <div id="morris-donut-example" class="dashboard-charts morris-charts"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->



            </div>
            <!-- end page content-->

        </div> <!-- container-fluid -->
@endsection

