@extends('admin')
@section('content')
<div>
    <h3 class="title-section">Tất cả sản phẩm</h3>
    <div class="bg-light mb-2">
        <table class="table align-middle" id="table1">
            <thead>
                <tr>
                    <th scope="col">Mã Sản Phẩm</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>

                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Kích thước</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $key => $cate)
                <tr>
                    <th scope="row">{{$cate -> maSP}}</th>
                    <td>{{$cate -> tenSP}}</td>
                    <td>{{$cate -> donGia}}</td>
                    <td>{{$cate -> soLuongCon}}</td>
                    <td>{{$cate -> tenDM}}</td>
                    <td>{{$cate -> kichThuoc}}</td>
                    <td>{{$cate -> moTa}}</td>
                    <td>
                        <button type="button" class="btn btn-outline-success me-2 mb-2"><a href="{{URL::to('/chitietsanpham/'.$cate->maSP)}}"> Xem </a></button>
                        <button type="submit" class="btn btn-outline-warning me-2 mb-2"><a href="{{URL::to('/edit-product/'.$cate->maSP)}}"> Sửa </a></button>
                        <button type="submit" class="btn btn-outline-danger me-2"><a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')" href="{{URL::to('/del-product/'.$cate->maSP)}}">Xóa</a></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        </nav>
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