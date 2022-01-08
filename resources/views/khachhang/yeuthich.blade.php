@extends('layout')
@section('trangchu')

<style>
    .item {
        width: 250px;
        /* height: 300px;
        background-color: black; */
        float: left;
        margin-top: 10px;
        margin-right: 35px;
    }
</style>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h3>Sản phẩm yêu thích</h3>
        <hr>

        <!-- bắt đầu danh sách sản phẩm -->

        <div class="item">
            <div class="row">
                <a href="{{URL::to('/chitietsanpham/')}}"><img src="{{asset('public/frontend/img/dm3-sp1-hinh1.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
            </div>
            <div class="row" style="font-size: 16px; margin-top: 5px;">
                <div class="col-md-8">
                    <p>Tên sản phẩm hơi bị dài lun á</p>
                </div>
                <div class="col-md-4 ">
                    <p class="bg-xanh">đơn giá đ</p>
                </div>
            </div>
        </div>

        <!-- kết thúc danh sách -->
        
    </div>

</div>

@endsection