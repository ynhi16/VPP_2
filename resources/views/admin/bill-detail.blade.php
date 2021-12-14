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
                    <th scope="col">Số lượng</th>
                    <th scope="col">Đơn giá </th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Calendar Calendar Calendar Calendar </td>
                    <td>Calendar</td>
                    <td>Calendar</td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-outline-success me-2">Duyệt hóa đơn</button>
            <button type="button" class="btn btn-outline-danger ms-2">Xóa</button>
        </div>
    </div>

</div>
@endsection