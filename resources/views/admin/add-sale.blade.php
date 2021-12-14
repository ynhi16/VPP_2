@extends('admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h3 class="title-section">Thêm khuyến mãi</h3>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Tên khuyến mãi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlInput1" class="form-label">Giá khuyến mãi</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-4">
                <label for="exampleFormControlTextarea1" class="form-label">Ngày bắt đầu</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-5">
                <label for="exampleFormControlInput1" class="form-label">Ngày kết thúc</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>
            <select class="form-select mb-5" aria-label="Default select example">
                <option selected>Trạng thái</option>
                <option value="1">Ẩn</option>
                <option value="2">Hiện</option>
            </select>
            <select class="form-select mb-4" aria-label="Default select example">
                <option selected>Tên sản phẩm</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <button type="button" class="btn btn-success">Thêm Khuyến Mãi</button>
        </div>
    </div>
</div>
@endsection