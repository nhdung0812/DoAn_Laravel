@extends('layout')
@section('main-content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 >DANh SÁCH Gói Credit</h2>
                    <a href="" type="button" class="btn btn-primary waves-effect waves-light">Thêm Câu Hỏi</a><br><br>

                        <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên Gói</th>
                                <th>Credit</th>
                                <th>Số Tiền</th>
                            </tr>
                        </thead>
                        <tbody>                       
                            @foreach (true)
                            <tr>
                                
                                <td>{{$goi->id}}</td>
                                <td>{{$goi->ten_goi}}</td>
                                <td>{{$goi->credit}}</td>
                                <td>{{$goi->so_tien}}</td>
                                <a href="{{ route('linh-vuc.cap-nhat', ['id' => $lv->id])}}" class="btn btn-success waves-effect waves-light">
                                        <i class="fe-edit"></i></a>
                                <a href="{{ route('linh-vuc.xoa', ['id' => $lv->id])}}"class="btn btn-danger waves-effect waves-light">
                                        <i class="fe-trash-2"></i>
                                    </a>
                                </td>  
                            </tr> 
                            @endforeach 
                        </tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
                <!-- end row-->
@endsection