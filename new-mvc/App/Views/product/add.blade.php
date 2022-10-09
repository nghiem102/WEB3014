@extends('layouts.master')
@section('title', 'Thêm sản phẩm')

@section('content-title', ' Thêm Sản phẩm')
@section('content')
    <!-- Phần nội dung riêng của action  -->
        <form class="form-horizontal " action="" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <a href="{{BASE_URL}}products" class="text-sm text-gray-700 dark:text-gray-500 underline">Danh sách sản phẩm</a>
                <a class="text-sm underline" style="color: black"> > Thêm mới sản phẩm</a>
                <div class="row">
                    <div class="col-md-6">
                        <h2 style="margin-left: 150px;color:rgb(245, 100, 100)">Thông tin sản phẩm</h1>
                        <div class="form-group">
                            <label for="ten_san_pham" class="col-md-3 col-sm-4 control-label">Tên sản phẩm <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="ten_san_pham" id="name" class="form-control" >
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gia_san_pham" class="col-md-3 col-sm-4 control-label">Giá sản phẩm <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="number" name="gia_san_pham" id="name" class="form-control" >
                                <span id="mes_sdt"></span>
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="hinh_anh" class="col-md-3 col-sm-4 control-label">Hình ảnh <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="file" name="hinh_anh" id="name" class="form-control" >
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mo_ta" class="col-md-3 col-sm-4 control-label">Mô tả <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="mo_ta" id="name" class="form-control" >
                                <span id="mes_sdt"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div style="margin-left: 166px">
                <button type="submit" class="btn btn-primary"> Thêm mới</button>
                <a href="{{BASE_URL}}products" class="btn btn-default">Hủy</a>
            </div>
        </form>
@endsection

