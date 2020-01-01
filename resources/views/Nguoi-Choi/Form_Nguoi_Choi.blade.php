@extends('layout')
@section('css')
<link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset ('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset ('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" /> 
@endsection
@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="header-title">@if(isset($nguoichoi)) Cập Nhật Câu Hỏi @else Thêm Người Chơi @endif</h2> 
                <div class="row">
                    <div class="col-lg-6">
                    @if(isset($nguoichoi)) <form action="{{ route ('nguoi-choi.xu-ly-cap-nhat', [ 'id' =>$nguoichoi->id ])}}" method="POST"> @else<form action="{{ route ('nguoi-choi.xu-ly-them-moi')}}" method="POST">@endif
                            <!-- hdf -->
                            @csrf
                            <div class="form-group mb-3">   
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="Nguoi_choi">Người Chơi</label>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <!-- sdasd -->
                            <div class="form-group mb-3">
                                <label for="example-password" >Người Chơi ID</label>
                                <input type="text" id="nguoi_choi_id" @if(isset($nguoichoi)) value="}"@endif name="nguoi_choi_id" class="form-control"  placeholder="Người Chơi ID">
                            </div>

                            <div class="form-group mb-3">
                                <label for="example-palaceholder" >Số Cấu</label>
                                <input type="text" id="so_cau" @if(isset($nguoichoi)) value=""@endif name="so_cau" class="form-control" placeholder="Số Câu">
                            </div>

                            <div class="form-group mb-3">
                                    <label for="example-textarea">Điểm</label>
                                    <input type="text" id="diem" @if(isset($nguoichoi)) value=""@endif name="diem" class="form-control" placeholder="Điểm">
                                </div>

                            <div class="form-group mb-3">
                                <label for="example-readonly">Ngày Giờ</label>
                                <input type="text" id="ngay_gio" @if(isset($nguoichoi)) value=""@endif name="ngay_gio" class="form-control"  placeholder="Ngày Giờ">
                            </div>

                            <button type="submit" class="btn btn-warning width-lg waves-effect waves-light" style="width:626px; background-color:#5089de;">Thêm </button>                                        
                        </form>
                    </div> <!-- end col -->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
@endsection
@section('js')
   <!-- Sweet Alerts js -->
   <script src=" {{ asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>

   <!-- Sweet alert init js-->
   <script src="{{ asset('assets/js/pages/sweet-alerts.init.js')}}"></script>

   <!-- App js-->
   <script src="{{ asset('assets/js/app.min.js')}}"></script> 
@endsection