@extends('admin')
@section('content')
<div>

    <h3 class="title-section">Chi tiết hóa đơn</h3>
    <div class="bg-light mb-2">
        <nav class="navbar navbar-light mb-2">
            <div class="container-fluid">
                <select class="form-select width-select">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <table class="table align-middle">
            <thead>
                <tr>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Phân loại</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Đơn giá </th>

                </tr>
            </thead>
            <tbody>
                @foreach($bill_detail as $key => $cate)
                <tr>
                    <td scope="row">{{$cate -> tenSP}}</td>
                    <td>{{$cate -> phanLoai}}</td>
                    <td>{{$cate -> soLuong}}</td>
                    <td>{{$cate -> donGia}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <form action="{{URL::to('/update-bill/'.$cate->maHD)}}" method="post">
            {{csrf_field()}}
                <button type="submit" class="btn btn-outline-success me-2"><a onclick="return confirm('Bạn có chắc chắn muốn xác nhận hóa đơn này?')">Duyệt hóa đơn</a></button>
                <button type="submit" class="btn btn-outline-danger me-2"><a onclick="return confirm('Bạn có chắc chắn muốn xóa thành phần hóa đơn này?')" href="{{URL::to('/del-bill/'.$cate->maHD)}}">Xóa</a></button>
            </form>
        </div>
    </div>

</div>
@endsection