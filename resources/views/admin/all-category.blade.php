@extends('admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3 class="title-section">Tất cả danh mục</h3>
        <div class="col-8 bg-light">
            <table class="table mx-auto align-middle">
                <thead>
                    <tr>
                        <th scope="col">Mã Sản Phẩm</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_category as $key => $cate)
                    <tr>
                        <th scope="row">{{$cate -> maDM}}</th>
                        <td>{{$cate -> tenDM}}</td>
                        <td>

                            <button type="submit" class="btn btn-outline-warning me-2"><a href="{{URL::to('/edit-category/'.$cate->maDM)}}">  Sửa </a></button>
                            <button type="submit" class="btn btn-outline-danger me-2"><a onclick="return confirm('Bạn có chắc chắn muốn xóa danh muc này?')" href="{{URL::to('/del-category/'.$cate->maDM)}}">Xóa</a></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <?php
    $message = Session::get('message');
    if ($message) {
        echo '<p>' . $message . '<p>';
        Session::put('message', null);
    }
    ?>
</div>
@endsection
 