@extends('layout')
@section('main-content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 >DANh SÁCH GÓI CREDITS</h2>
                <a href="{{route('goi-credit.them-moi')}}" type="button" class="btn btn-primary waves-effect waves-light">Thêm Gói Credit</a><br><br>

                        <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên Gói</th>
                                <th>Credit</th>
                                <th>Số Tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>                       
                            @foreach ($goicredit as $goi)
                            <tr>
                                
                                <td>{{$goi->id}}</td>
                                <td>{{$goi->ten_goi}}</td>
                                <td>{{$goi->credit}}</td>
                                <td>{{$goi->so_tien}}</td>
                                <td>
                                <a href="{{ route('goi-credit.cap-nhat', ['id' => $goi->id])}}" class="btn btn-success waves-effect waves-light">
                                        <i class="fe-edit"></i></a>
                                <a href="{{ route('goi-credit.xoa', ['id' => $goi->id])}}"class="btn btn-danger waves-effect waves-light">
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