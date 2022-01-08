@extends('layout')
@section('trangchu')
<div class="container">
    <div class="row g-0">
        <div class="mt-5">
            <div class="d-flex justify-content-between mb-5">
                @for($i=0; $i<=3; $i++) <div class="card" style="width: 300px; height: 300px;">
                    <a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP)}}">
                        <img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="card-img-top" alt="..." height="230px" width="98%"></a>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="card-text">{{$sanphambc[$i]->tenSP}}</div>
                            <div class="d-flex align-items-start"><div class="text-end card-text price">{{$sanphambc[$i]->donGia}}đ</div></div>
                        </div>
                    </div>

            </div>
            @endfor
        </div>


    </div>
    <div class="d-flex justify-content-between mb-5">
        @for($i=4; $i<=7; $i++) <div class="card" style="width: 300px; height: 300px;">
            <a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP)}}">
                <img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="card-img-top" alt="..." height="230px" width="98%"></a>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-text">{{$sanphambc[$i]->tenSP}}</div>
                    <div class="d-flex align-items-start"><div class="text-end card-text price">{{$sanphambc[$i]->donGia}}đ</div></div>
                </div>
            </div>
    </div>
    @endfor
    
</div>
<div class="d-flex justify-content-between mb-5">
        @for($i=8; $i<=11; $i++) <div class="card" style="width: 300px; height: 300px;">
            <a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP)}}">
                <img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="card-img-top" alt="..." height="230px" width="98%"></a>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-text">{{$sanphambc[$i]->tenSP}}</div>
                    <div class="d-flex align-items-start"><div class="text-end card-text price">{{$sanphambc[$i]->donGia}}đ</div></div>
                </div>
            </div>
    </div>
    @endfor
</div>
<div class="d-flex justify-content-between mb-5">
        @for($i=11; $i<=14; $i++) <div class="card" style="width: 300px; height: 300px;">
            <a href="{{URL::to('/chitietsanpham/'.$sanphambc[$i]->maSP)}}">
                <img src="{{asset('public/frontend/img/'.$sanphambc[$i]->tenHA)}}" class="card-img-top" alt="..." height="230px" width="98%"></a>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-text">{{$sanphambc[$i]->tenSP}}</div>
                    <div class="d-flex align-items-start"><div class="text-end card-text price">{{$sanphambc[$i]->donGia}}đ</div></div>
                </div>
            </div>
    </div>
    @endfor
</div>
</div>
</div>
@endsection