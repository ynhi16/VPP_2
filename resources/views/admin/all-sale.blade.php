@extends('admin')
@section('content')
<div>
    <h3 class="title-section">Tất cả khuyến mãi</h3>
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
                    <th scope="col">Mã Khyến Mãi</th>
                    <th scope="col">Tên Khuyến Mãi</th>
                    <th scope="col">Ngày Bắt Đầu</th>
                    <th scope="col">Ngày kết thúc</th>
                    <th scope="col">Têm Sản Phẩm</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Calendar Calendar Calendar Calendar </td>
                    <td>Calendar</td>
                    <td>Calendar</td>
                    <td>Calendar</td>
                    <td>
                        <button type="button" class="btn btn-outline-success me-2">Xem</button>
                        <button type="button" class="btn btn-outline-warning ms-2">Sửa</button>
                        <button type="button" class="btn btn-outline-danger ms-2">Xóa</button>
                    </td>
                </tr>
            </tbody>
        </table>

        </nav>
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