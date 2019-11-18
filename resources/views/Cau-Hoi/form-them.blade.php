@extends('layout')
@section('css')
        <link href="{{ asset ('assets/libs/jquery-nice-select/nice-select.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="header-title">@if(isset($cauhoi)) Cập Nhật Câu Hỏi @else Thêm Câu Hỏi @endif</h2> 
                                <div class="row">
                                    <div class="col-lg-6">
                                    @if(isset($cauhoi)) <form action="{{ route ('cau-hoi.xu-ly-cap-nhat', [ 'id' =>$cauhoi->id ])}}" method="POST"> @else<form action="{{ route ('cau-hoi.xu-ly-them-moi')}}" method="POST">@endif
                                            <!-- hdf -->
                                            @csrf
                                            <div class="form-group mb-3">   
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="linh_vuc_cau_hoi">Lĩnh Vực</label>
                                                        <select class="custom-select " name="linh_vuc"> 
                                                            <option selected="">Chọn Lĩnh Vực</option>
                                                            @foreach( $linhvuc as $lv)
                                                            <option @if(isset($cauhoi) && $lv->id == $cauhoi->linh_vuc_id) selected  @endif value="{{ $lv->id }}" value="($linhvuc->id)"> {{$lv->ten_linh_vuc}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- sdasd -->
                                            <div class="form-group mb-3">
                                                <label for="example-password" >Nội Dung Câu Hỏi</label>
                                                <input type="text" id="noi_dung_cau_hoi" @if(isset($cauhoi)) value="{{$cauhoi->noi_dung}}"@endif name="noi_dung_cau_hoi" class="form-control"  placeholder="Nội dung">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-palaceholder" >Phương Án A</label>
                                                <input type="text" id="phuong_an_a" @if(isset($cauhoi)) value="{{$cauhoi->phuong_an_a}}"@endif name="phuong_an_a" class="form-control" placeholder="Phương Án A">
                                            </div>

                                            <div class="form-group mb-3">
                                                    <label for="example-textarea">Phương Án B</label>
                                                    <input type="text" id="phuong_an_b" @if(isset($cauhoi)) value="{{$cauhoi->phuong_an_b}}"@endif name="phuong_an_b" class="form-control" placeholder="Phương Án B">
                                                </div>

                                            <div class="form-group mb-3">
                                                <label for="example-readonly">Phương Án C</label>
                                                <input type="text" id="phuong_an_c" @if(isset($cauhoi)) value="{{$cauhoi->phuong_an_c}}"@endif name="phuong_an_c" class="form-control"  placeholder="Phương Án C">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-disable">Phương Án D</label>
                                                <input type="text" class="form-control" @if(isset($cauhoi)) value="{{$cauhoi->phuong_an_d}}"@endif id="phuong_an_d" name="phuong_an_d"  placeholder="Phương Án D">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="example-static">Đáp Án</label>
                                                <input type="text"  class="form-control" id="dap_an" @if(isset($cauhoi)) value="{{$cauhoi->dap_an}}"@endif name="dap_an" placeholder="Đáp Án">
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
<script src="{{ asset ('assets/js/vendor.min.js')}}"></script>


<script src="{{ asset ('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{ asset ('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{ asset ('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{ asset ('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<!-- Init js-->
<script src="{{ asset ('assets/js/pages/form-advanced.init.js')}}"></script>

<!-- App js-->
<script src="{{ asset ('assets/js/app.min.js')}}"></script>
@endsection