@extends('admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h3 class="title-section">Cập nhật sản phẩm</h3>
            @foreach($edit_product as $key => $value)
            <form action="{{URL::to('/update-product/'.$value->maSP)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name=" product_name" value="{{$value->tenSP}}">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Số lượng</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name=" product_soLuongCon" value="{{$value->soLuongCon}}">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Đơn giá</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="  product_donGia" value="{{$value->donGia}}">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Kích thước</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="  product_kichThuoc" value="{{$value->kichThuoc}}">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="product_moTa" value="{{$value->moTa}}">{{$value->moTa}}</textarea>
                </div>
                <div class="mb-5">
                    <label for="exampleFormControlInput1" class="form-label">Hình ảnh</label>
                    <input type="file" name="files[]" multiple class="form-control" id="exampleFormControlInput1">
                </div>
                <select class="form-select mb-4" aria-label="Default select example" name="product_maDM">
                    @foreach($categories as $key => $category)
                    @if($category->maDM == $value->maDM )
                    <option selected value="{{$category -> maDM}}">{{$category -> tenDM}}</option>
                    @else
                    <option value="{{$category -> maDM}}">{{$category -> tenDM}}</option>
                    @endif
                    @endforeach
                </select>
                <button type="submit" class="btn btn-success" name="add_product">Cập Nhật Sản Phẩm</button>
                
            </form>
            @endforeach
        </div>
    </div>
</div>

@endsection