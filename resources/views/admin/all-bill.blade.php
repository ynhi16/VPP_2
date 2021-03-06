@extends('admin')
@section('content')
<div>
    <h3 class="title-section">Tất cả hóa đơn</h3>
    <div class="bg-light mb-2">
        <table class="table align-middle" id="table1">
            <thead>
                <tr>
                    <th scope="col">Mã hóa đơn</th>
                    <th scope="col">Tên người dùng</th>
                    <th scope="col">Ngày lập</th>
                    <th scope="col">Người nhận</th>
                    <th scope="col">SĐT</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_bill as $key => $cate)
                <tr>
                    <th scope="row">{{$cate -> maHD}}</th>
                    <td>{{$cate -> tenND}}</td>
                    <td>{{$cate -> ngayLap}}</td>
                    <td>{{$cate -> nguoiNhan}}</td>
                    <td>{{$cate -> SDT}}</td>
                    <td>{{$cate -> diaChi}}</td>
                    <td>{{$cate -> trangThai}}</td>

                    <td>

                        <button type="button" class="btn btn-outline-success me-2"><a href="{{URL::to('/bill-detail/'.$cate->maHD)}}">Xem chi tiết</a></button>
                        <button type="submit" class="btn btn-outline-danger me-2"><a onclick="return confirm('Bạn có chắc chắn muốn xóa hóa đơn này?')" href="{{URL::to('/del-bill/'.$cate->maHD)}}">Xóa</a></button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- <nav aria-label="Page navigation example">
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
    </nav> -->
</div>
@endsection