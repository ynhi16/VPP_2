@extends('admin')
@section('allcategory')
<div class="mx-auto" style="width: 200px;">
    <h3>Thêm sản phẩm</h3>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Số lượng</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Đơn vị tính đơn giá</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</div>
@endsection