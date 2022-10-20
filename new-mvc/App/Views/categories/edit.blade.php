@extends('layouts.master')
@section('title', 'Sửa danh mục')

@section('content-title', ' Sửa Danh mục')
@section('content')
<!-- Phần nội dung riêng của action  -->
<form class="form-horizontal " action="{{BASE_URL}}categories/update/{{$categories->id}}" method="post" enctype="multipart/form-data">
    <div class="box-body">
        <a href="{{BASE_URL}}categories" class="text-sm text-gray-700 dark:text-gray-500 underline">Danh sách danh mục</a>
        <a class="text-sm underline" style="color: black"> > Sửa danh mục</a>
        <div class="row">
            <div class="col-md-6" style="margin-top: 30px;">
                <div class="form-group">
                    <label for="ten_san_pham" class="col-md-3 col-sm-4 control-label">Tên danh mục <span class="text-danger">(*)</span></label>

                    <div class="col-md-9 col-sm-8">
                        <input type="text" name="name" id="name" class="form-control" value="{{$categories->name}}">
                        <span id="mes_sdt"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mo_ta" class="col-md-3 col-sm-4 control-label">Trạng thái <span class="text-danger">(*)</span></label>

                    <div class="col-md-9 col-sm-8">
                        <input type="radio" name="status" value="1" {{$categories->status == 1 ? 'checked' : ''}}> Còn hàng
                        <input type="radio" name="status" value="0" {{$categories->status == 0 ? 'checked' : ''}}> Hết hàng
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div style="margin-left: 166px">
        <button class="btn btn-primary"> Sửa mới</button>
        <a href="{{BASE_URL}}categories" class="btn btn-default">Hủy</a>
    </div>
</form>
@endsection