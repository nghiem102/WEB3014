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
                <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <table class="table table-bordered table-striped  text-center">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>ProductTên sản phẩm</th>
                                                        <th>Giá</th>
                                                        <th>Ảnh</th>
                                                        <th>Danh mục</th>
                                                        <th>Trạng thái</th>
                                                        <th><a href="productsadd"><i class="far fa-plus-square" aria-hidden="true"></i></a></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td>xx></td>
                                                            <td>xx</td>
                                                            <td>xx</td>
                                                            <td>xx</td>
                                                            <td>xx</td>
                                                            <td>xx</td>
                                                            <td>
                                                                <a href="#"> <i class="fas fa-external-link-alt"></i></a>
                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa môn học này')" href=""><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                    </section>
            </form>
        </div>

@endsection
