<!-- Kế thừa lại layout master -->
@extends('layouts.master')

<!-- Truyền giá trị cho những phần thay đổi -->
<!-- yield(tên)  ~ section(tên, giá trị) -->
@section('title', 'Danh mục sản phẩm')

<!-- yield(tên) ~ section(tên) nội dung endsection -->
@section('content-title', 'Danh mục')
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
                                            <th>Tên danh mục</th>
                                            <th>Trạng thái</th>
                                            <th><a href="categories/add"><i class="far fa-plus-square" aria-hidden="true"></i></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $categories)
                                        <tr>
                                            <td>{{ $categories->id }}</td>
                                            <td>{{ $categories->name }}</td>
                                            <td>{{ $categories->status == 1 ?'Còn hàng' :'Hết hàng' }}</td>
                                            <td>
                                                <a href="{{BASE_URL}}categories/edit/{{$categories->id}}"><i class="fas fa-edit"></i></a>
                                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này')" href="{{BASE_URL}}categories/delete/{{$categories->id}}"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
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