@extends('layout')

@section('main-content')
< <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">DANH SÁCH NGƯỜI CHƠI</h4>
                                <a href="{{ route('nguoi-choi.them-moi')}}" type="button" class="btn btn-primary waves-effect waves-light">Thêm Người Chơi</a>
                                <br><br>
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Người Chơi ID</th>
                                            <th>Số Câu</th>
                                            <th>Điểm</th>
                                            <th>Ngày Giờ</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nguoichoi as $nguoichoi)
                                        <tr>
                                            <td>{{$nguoichoi->id}}</td>
                                            <td>{{$nguoichoi->nguoi_choi_id}}</td>
                                            <td>{{$nguoichoi->so_cau}}</td>
                                            td>{{$nguoichoi->diem}}</td>
                                            <td>{{$nguoichoi->ngay_gio}}</td>
                                            <td>
                                            <a href="{{ route('linh-vuc.cap-nhat', ['id' => $nguoichoi->nguoi_choi_id])}}" class="btn btn-success waves-effect waves-light">
                                                    <i class="fe-edit"></i></a>
                                               <a href="{{ route('linh-vuc.xoa', ['id' => $nguoichoi->nguoi_choi_id])}}"class="btn btn-danger waves-effect waves-light">
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
@section('js')
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- third party js -->
<script src="{{ asset ('assets/libs/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.flash.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/buttons.print.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset ('assets/libs/datatables/dataTables.select.min.js')}}"></script>
<script src="{{ asset ('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset ('assets/libs/pdfmake/vfs_fonts.js')}}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ asset ('assets/js/pages/datatables.init.js')}}"></script>

<!-- App js-->
<script src="{{ asset ('assets/js/app.min.js')}}"></script>
@endsection
