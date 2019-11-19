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
                <h4 class="mb-3 header-title">@if(isset($goicredit)) Cập Nhật Gói Credit @else Thêm Gói Credit @endif</h4>

             @if(isset($goicredit)) <form action="{{ route('goi-credit.xu-ly-cap-nhat',['id' => $goicredit->id])}}" method="POST"> @else <form action="{{ route('goi-credit.xu-ly-them-moi')}}" method="POST"> @endif
                @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tên Gói Credit</label>
                    <input type="type" class="form-control" id="ten_goi_credit" name="ten_goi_credit" placeholder="Tên Gói Credit" @if(isset($goicredit)) value="{{$goicredit->ten_goi}}" @endif>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Số Credit</label>
                        <input type="type" class="form-control" id="credit" name="credit" placeholder="Số Credit" @if(isset($goicredit)) value="{{$goicredit->credit}}" @endif>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số Tiền</label>
                        <input type="type" class="form-control" id="so_tien" name="so_tien" placeholder="Số Tiền" @if(isset($goicredit)) value="{{$goicredit->so_tien}}" @endif>
                    </div>
                    <button type="submit" class="btn btn-info btn-xs" id="sa-success" >@if(isset($goicredit)) Cập Nhật @else Thêm @endif</button>
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