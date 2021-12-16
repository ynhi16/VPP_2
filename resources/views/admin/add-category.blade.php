@extends('admin')
@section('content')
<form action="{{URL::to('/save-category')}}" method="post">
    {{csrf_field()}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h3 class="title-section">Thêm danh mục</h3>
                <div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="category_name">
                    </div>
                    <button type="submit" class="btn btn-success" name="add_category">Thêm Danh Mục</button>
                </div>
            </div>
        </div>
    </div>
    <?php
        $message = Session::get('message');
        if($message) {
            echo '<p>'.$message.'<p>';
            Session::put('message',null);
        }
    ?>
</form>

@endsection