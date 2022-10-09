<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh sách sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Sản phẩm')
@section('content')

<div class="box-body table-responsive no-padding">
            <form action="" method="post">
                @csrf
                <div class='row mb-2'>
                <a class="text-sm underline col-6" style="color: black">Danh sách sản phẩm</a>
                <div class="clearfix  col-4 text-center"><a href="productsadd" class="btn btn-primary">Thêm mới</a></div></div>
                <div class="double-scroll">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 90px" class="text-center">
                                Mã sản phẩm
                            </th>
                            <th class="text-center">Tên sản phẩm</th>
                            <th class="text-center">Giá sản phẩm</th>
                            <th class="text-center" style="width: 280px">Hình ảnh</th>
                            <th class="text-center" style="width: 280px">Mô tả</th>
                            <th class="text-center">Loại sản phẩm</th>
                            <th class="text-center">Trạng thái</th>
                            <th style="width: 90px" class="text-center">Hành động</th>
                        </tr>
                            <tr>
                                <td class="text-center">xx</td>
                                <td class="text-center"><a style="color:#333333;font-weight: bold;" href="" style="white-space:unset;text-align: justify;"> xx</a></td>
                                <td class="text-center"><a style="color:#ca4a4a;font-weight: bold;"> xx</a></td>
                                <td class="text-center"><img src="/img/{{$item->hinh_anh_phong}}" style="height: 120px; width: 200px"></td>
                                <td class="text-center" style="width: 200px"><p>xx</p></td>
                                <td class="text-center">xx</td>
                                <td class="text-center">xx</td>
                            </tr>
                    </table>
                </div>
            </form>
        </div>

@endsection
