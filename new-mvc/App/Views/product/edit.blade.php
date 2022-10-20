@extends('layouts.master')
@section('title', 'Chỉnh sửa sản phẩm')

@section('content-title', ' Chỉnh sửa Sản phẩm')
@section('content')
<!-- Phần nội dung riêng của action  -->
<form class="form-horizontal " action="{{BASE_URL}}products/update/{{$product->id}}" method="post" enctype="multipart/form-data">
    <div class="box-body">
        <a href="{{BASE_URL}}products" class="text-sm text-gray-700 dark:text-gray-500 underline">Danh sách sản phẩm</a>
        <a class="text-sm underline" style="color: black"> > Chỉnh sửa sản phẩm</a>
        <div class="row">
            <div class="col-md-6" style="margin-top: 30px;">
                <div class="form-group">
                    <label for="ten_san_pham" class="col-md-3 col-sm-4 control-label">Tên sản phẩm <span class="text-danger">(*)</span></label>

                    <div class="col-md-9 col-sm-8">
                        <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}">
                        <span id="mes_sdt"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gia_san_pham" class="col-md-3 col-sm-4 control-label">Giá sản phẩm <span class="text-danger">(*)</span></label>

                    <div class="col-md-9 col-sm-8">
                        <input type="number" name="price" id="name" class="form-control" value="{{$product->price}}">
                        <span id="mes_sdt"></span>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="hinh_anh" class="col-md-3 col-sm-4 control-label">Hình ảnh <span class="text-danger">(*)</span></label>

                    <div class="col-md-9 col-sm-8">
                        <input type="file" name="hinh_anh" id="name" class="form-control">
                        <span id="mes_sdt"></span>
                    </div>
                </div> -->
                <div class="form-group">
                    <label for="mo_ta" class="col-md-3 col-sm-4 control-label">Mô tả <span class="text-danger">(*)</span></label>

                    <div class="col-md-9 col-sm-8">
                        <input type="text" name="desc" id="name" class="form-control" value="{{$product->desc}}">
                        <span id="mes_sdt"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mo_ta" class="col-md-3 col-sm-4 control-label">Trạng thái <span class="text-danger">(*)</span></label>

                    <div class="col-md-9 col-sm-8">
                        <input type="radio" name="status" value="1" {{$product->status == 1 ? 'checked' : ''}}> Còn hàng
                        <input type="radio" name="status" value="0" {{$product->status == 0 ? 'checked' : ''}}> Hết hàng
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div style="margin-left: 166px">
        <button class="btn btn-primary">Cập nhật</button>
        <a href="{{BASE_URL}}products" class="btn btn-default">Hủy</a>
    </div>
</form>
@endsection