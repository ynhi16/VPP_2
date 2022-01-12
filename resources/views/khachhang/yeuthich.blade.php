@extends('layout')
@section('trangchu')

<style>
    .item {
        width: 250px;
        /* height: 300px;
        background-color: black; */
        height: 400px;
        float: left;
        margin-top: 10px;
        margin-right: 35px;


    }

    .tymnho {
        width: 25px;
        height: 25px;
        margin-top: -40px;
    }
</style>

<div class="wp-yeuthich">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3>Sản phẩm yêu thích</h3>

            <hr>



            <!-- bắt đầu danh sách sản phẩm -->
            @if ($yeuthichs && count($yeuthichs) > 0) 
            @foreach($yeuthichs as $key => $value)
            <div class="item">
                <div class="row">
                    <a href="{{URL::to('/chitietsanpham/'.$value->maSP)}}"><img src="{{asset('public/frontend/img/'.$value->tenHA)}}" class="img-thumbnail" alt="Cinque Terre"></a>
                </div>
                <div class="row" style="font-size: 16px; margin-top: 5px;">
                    <div class="col-md-8">
                        <p style="font-size: 14px; ">{{$value->tenSP}}</p>
                    </div>
                    <div class="col-md-4 ">
                        <p class="bg-xanh" style="font-size: 14px;">{{$value->donGia}} đ</p>
                        <p style="text-align: right; margin-top: 40px;"><a class="like" href="{{URL::to('del-yeuthich/'.$value->maSP)}}"><img class="tymnho" src="{{asset('public/frontend/img/tym-den.png')}}" alt=""></a></p>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div class="col-md-6">
            <img src="{{asset('public/frontend/img/rong.png')}}" alt="" >
            </div>
            @endif
            <!-- kết thúc danh sách -->

        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('alo').click(function(event) {
            alert('clm')
            var bien = $('bla').val();
            $.ajax({
                method: 'post',
                url: '{{url("/test")}}',
                data: bien,
                // other AJAX settings goes here
                // ..
                success: function(request) {
                    alert(request)
                }
            });
            //event.preventDefault(); // <- avoid reloading
        });
    });
</script>

@endsection