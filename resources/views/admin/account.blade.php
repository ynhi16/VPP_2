@extends('admin')
@section('content')
<div>
    <h3 class="title-section">Tất cả tài khoản</h3>
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
                    <th scope="col">Mã người dùng</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Giới Tính</th>
                    <th scope="col">SĐT</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Tài khoản</th>
                    <th scope="col">Mật khẩu</th>
                    <th scope="col">Phường Xã</th>
                    <th scope="col">Quyền</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                    @foreach($account as $key => $cate)
                    <tr>
                        <th scope="row">{{$cate -> maND}}</th>
                        <td>{{$cate -> tenND}}</td>
                        <td>{{$cate -> gioiTinh}}</td>
                        <td>{{$cate -> SDT}}</td>
                        <td>{{$cate -> email}}</td>
                        <td>{{$cate -> diaChi}}</td>
                        <td>{{$cate -> taiKhoan}}</td>
                        <td>{{$cate -> matKhau}}</td>
                        <td>{{$cate -> maPX}}</td>
                        <td>{{$cate -> maQuyen}}</td>
                        <td>

                            <button type="submit" class="btn btn-outline-success me-2"><a href="#">Xem chi tiết </a></button>
                            <button type="submit" class="btn btn-outline-danger me-2"><a onclick="return confirm('Bạn có chắc chắn muốn xóa danh muc này?')" href="#">Xóa</a></button>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
@endsection