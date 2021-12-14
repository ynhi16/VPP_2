@extends('admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h3 class="title-section">Thêm danh mục</h3>
            <div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <button type="button" class="btn btn-success">Thêm Danh Mục</button>
            </div>
        </div>
    </div>
</div>
@endsection