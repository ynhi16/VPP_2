@extends('admin')
@section('content')
<div>
    <h3 class="title-section">Tất cả tài khoản</h3>
    <div class="bg-light mb-2">
        <table class="table align-middle" id="table1">
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
                    <th scope="col">Trạng thái</th>
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
                    <td>{{$cate -> trangThai}}</td>
                    <form action="{{URL::to('/update-account/'.$cate->maND)}}" method="post">
                        {{csrf_field()}}
                        <td>
                            <button type="submit" class="btn btn-outline-success"><a onclick="return confirm('Bạn có chắc chắn muốn khóa tài khoản này?')">Khóa</a></button>
                    </form>
                    <form action="{{URL::to('/update-account-open/'.$cate->maND)}}" method="post">
                    {{csrf_field()}}
                            <button type="submit" class="btn btn-outline-danger mt-2"><a onclick="return confirm('Bạn có chắc chắn muốn mở tài khoản này?')">Mở khóa</a></button>
                        </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection