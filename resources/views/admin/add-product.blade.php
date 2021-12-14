@extends('admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
       <div class="col-8">
            <h3 class="title-section">Thêm sản phẩm</h3>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Số lượng</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Đơn vị tính đơn giá</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-5">
                <label for="exampleFormControlInput1" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" id="exampleFormControlInput1">
            </div>
            <select class="form-select mb-3" aria-label="Default select example">
                <option selected>Mã danh mục</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
</div>
@endsection