@extends('admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h3 class="title-section">Tất cả danh mục</h3>
        <div class="col-8 bg-light" >                  
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
                            
                            <button type="button" class="btn btn-outline-warning me-2">Sửa</button>
                            <button type="button" class="btn btn-outline-danger me-2">Xóa</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Calendar/ Schedule</td>
                        <td>
                            
                            <button type="button" class="btn btn-outline-warning me-2">Sửa</button>
                            <button type="button" class="btn btn-outline-danger me-2">Xóa</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            </nav>
        </div>
    </div>
</div>
@endsection