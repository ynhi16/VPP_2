@extends('layout')
@section('trangchu')


<div class="container">
<div class="title-row mb-4">Kết quả tìm kiếm</div>
    <div class="row row-cols-4">
        @foreach($sanphambc1 as $key => $cate)
        <div class="col mb-4">
            <div class="card" style="width: 300px; height: 300px;">
                <a href="{{URL::to('/chitietsanpham/'.$cate->maSP)}}">
                    <img src="{{asset('public/frontend/img/'.$cate->tenHA)}}" class="card-img-top" alt="..." height="230px" width="98%"></a>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="card-text">{{$cate->tenSP}}</div>

                        <div class="d-flex align-items-start">
                            <div class="text-end card-text price">{{$cate->donGia}}đ</div>
                        </div>
                    </div>
                </div>
            </div>
           

        </div>
        @endforeach
    </div>
</div>
</div>
@endsection