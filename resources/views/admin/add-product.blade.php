@extends('admin')
@section('content')
<form action="{{URL::to('/save-product')}}" method="post">
{{csrf_field()}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h3 class="title-section">Thêm sản phẩm</h3>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name=" product_name">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Số lượng</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name=" product_donGia">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Đơn vị tính đơn giá</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="  product_soLuongCon">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlInput1" class="form-label">Kích thước</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="  product_soLuongCon">
                </div>
                <div class="mb-4">
                    <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea name="product_moTa">
                </div>
                <div class="mb-5">
                    <label for="exampleFormControlInput1" class="form-label">Hình ảnh</label>
                    <input type="file" name="file[]" multiple="multiple" class="form-control" id="exampleFormControlInput1">
                </div>
                <select class="form-select mb-4" aria-label="Default select example">
                    @foreach($category as $key => $cate)
                    <option>{{$cate -> tenDM}}</option>
                    @endforeach
                </select>
                <button type="button" class="btn btn-success">Thêm Sản Phẩm</button>
            </div>
        </div>
    </div>
</form>
@endsection