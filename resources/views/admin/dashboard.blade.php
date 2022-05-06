@extends('admin')
@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Thống Kê</h1>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        

                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Khách hàng</div>
                                        @foreach($user as $key => $user)
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user -> tong}}</div>
                                        @endforeach
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">Đơn hàng</div>
                                        @foreach($order as $key => $order)
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$order -> tong}}</div>
                                        @endforeach
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                    
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Doanh thu trong ngày</div>
                                        @foreach($date as $key => $date)
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$date -> tong}}</div>
                                        @endforeach
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">      
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sản phẩm</div>
                                        @foreach($product as $key => $product)
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$product -> tong}}</div>
                                        @endforeach
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection