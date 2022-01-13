@extends('admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h3 class="title-section">Cập nhật danh mục</h3>
            <div>
                @foreach($edit_category as $key => $value)
                <form action="{{URL::to('/update-category/'.$value->maDM)}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="category_name" value="{{$value->tenDM}}">
                    </div>
                    <button type="submit" class="btn btn-success" name="update_category">Cập nhật Danh Mục</button>
                </form>
                @endforeach
            </div>

        </div>
    </div>
   
</div>
@endsection