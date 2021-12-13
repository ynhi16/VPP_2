@extends('admin')
@section('allcategory')
<div>
    <h3 class="text-center">Tất cả danh mục</h3>
    <table class="table mx-auto align-middle">
        <thead>
            <tr>
                <th scope="col">Mã Sản Phẩm</th>
                <th scope="col">Tên Sản Phẩm</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Calendar/ Schedule</td>
                <td>
                    <button type="button" class="btn btn-outline-warning">Sửa</button>
                    <button type="button" class="btn btn-outline-danger">Xóa</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Calendar/ Schedule</td>
                <td>
                    <button type="button" class="btn btn-outline-warning">Sửa</button>
                    <button type="button" class="btn btn-outline-danger">Xóa</button>
                </td>
            </tr>
        </tbody>
    </table>
    
    </nav>
</div>
@endsection