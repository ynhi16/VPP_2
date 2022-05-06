@extends('layout')
@section('trangchu')
<style>
    /**/
    @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
    /*reset css*/


    /****** Style Star Rating Widget *****/
    #rating {
        border: none;
        float: left;
    }

    #rating>input {
        display: none;
    }

    /*ẩn input radio - vì chúng ta đã có label là GUI*/
    #rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    /*1 ngôi sao*/
    #rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    /*0.5 ngôi sao*/
    #rating>label {
        color: #ddd;
        float: right;
    }

    /*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
    /*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
    #rating>input:checked~label,
    #rating:not(:checked)>label:hover,
    #rating:not(:checked)>label:hover~label {
        color: black;
    }

    /* Hover vào các sao phía trước ngôi sao đã chọn*/
    #rating>input:checked+label:hover,
    #rating>input:checked~label:hover,
    #rating>label:hover~input:checked~label,
    #rating>input:checked~label:hover~label {
        color: #444;
    }
</style>
<div class="ms-5 me-5">
    <h3>Đánh giá sản phẩm</h3>
    <hr style="border-width: 0.5px;">

    <!-- item sản phẩm -->
    <div class="row">

        <!-- thông tin sản phẩm -->
        <div class="row">
            <div class="col-md-3">
                <a href="{{URL::to('/chitietsanpham/')}}"><img src="{{asset('public/frontend/img/dm2-sp7-hinh4.png')}}" class="img-thumbnail" alt="Cinque Terre"></a>
            </div>
            <div class="col-md-9">
                <p>Sản phẩm ở đây nèeeeeeeeeeeeeeeeeeeeeeeeeee</p>
                <p>Sản phẩm ở đây nèeeeeeeeeeeeeeeeeeeeeeeeeee</p>
                <p>Sản phẩm ở đây nèeeeeeeeeeeeeeeeeeeeeeeeeee</p>
            </div>
        </div>

        <!-- đáng giá sản phẩm -->
        <div class="row">
            <div id="rating">
                <input type="radio" id="star5" name="rating" value="5" onclick="rating(this.value)" />
                <label class="full" for="star5" title="Awesome - 5 stars" value="5"></label>

                <input type="radio" id="star4" name="rating" value="4" onclick="rating(this.value)" />
                <label class="full" for="star4" title="Pretty good - 4 stars" value="4"></label>

                <input type="radio" id="star3" name="rating" value="3" onclick="rating(this.value)" />
                <label class="full" for="star3" title="Meh - 3 stars" value="3"></label>

                <input type="radio" id="star2" name="rating" value="2" onclick="rating(this.value)" />
                <label class="full" for="star2" title="Kinda bad - 2 stars" value="2"></label>

                <input type="radio" id="star1" name="rating" value="1" onclick="rating(this.value)" />
                <label class="full" for="star1" title="Sucks big time - 1 star" value="1"></label>
            </div>
        </div>

        <!--bình luận -->
        <div class="row">
            <div class="col">
                <textarea rows="4" cols="70" style="width: 100%;"></textarea>
            </div>
        </div>
    </div>
</div>

@endsection