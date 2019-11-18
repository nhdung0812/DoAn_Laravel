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
                <h4 class="mb-3 header-title">@if(isset($linhvuc)) Cập Nhật Lĩnh Vực @else Thêm Lĩnh Vực @endif</h4>

            @if(isset($linhvuc))<form action="{{ route('linh-vuc.xu-ly-cap-nhat' , ['id' => $linhvuc->id])}}" method="POST"> @else <form action="{{ route('linh-vuc.xu-ly-them-moi')}}" method="POST">   @endif
                @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tên Lĩnh Vực</label>
                    <input type="type" class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" placeholder="Tên Lĩnh Vực" @if(isset($linhvuc)) value="{{$linhvuc->ten_linh_vuc}}" @endif>
                    </div>
                    <button type="submit" class="btn btn-info btn-xs" id="sa-success" >@if(isset($linhvuc)) Cập Nhật @else Thêm @endif</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end row-->
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