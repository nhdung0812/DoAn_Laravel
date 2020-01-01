
@extends('layout')
@section('css')
    <!-- third party css -->
        <link href="{{ asset ('assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{ asset ('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset ('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 >DANh SÁCH CÂU HỎI</h2>
                    <a href="" data-target="#modal-add" data-toggle="modal"class="btn btn-primary waves-effect waves-light">Thêm Câu Hỏi</a><br><br>

                        <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NỘI DUNG</th>
                                <th>LĨNH VỰC</th>
                                <th>PHƯƠNG ÁN A</th>
                                <th>PHƯƠNG ÁN B</th>
                                <th>PHƯƠNG ÁN C</th>
                                <th>PHƯƠNG ÁN D</th>
                                <th>ĐÁP ÁN</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cauhoi as $cau)
                            <tr id="1">
                                <td><span class="tabledit-span tabledit-identifier"></span><input class="tabledit-input tabledit-identifier" type="hidden" name="id_cau_hoi" value="">{{$cau->id}}</td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">{{$cau->noi_dung}}</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Sonya Frost" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">{{$cau->linh_vuc_id}}</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Software Engineer" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">{{$cau->phuong_an_a}}</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Edinburgh" style="display: none;" disabled=""></td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">{{$cau->phuong_an_b}}</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="23" style="display: none;" disabled=""></td>
                                <td>{{$cau->phuong_an_c}}</td>
                                <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">{{$cau->phuong_an_d}}</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$103,600" style="display: none;" disabled=""></td>
                                <td> {{$cau->dap_an}}</td>
                                <td>
                                    <a href="{{ route('cau-hoi.cap-nhat', ['id' => $cau->id])}}" class="btn btn-success waves-effect waves-light">
                                        <i class="fe-edit"></i></a>
                                    <a href="{{ route('cau-hoi.xoa', ['id' => $cau->id])}}"class="btn btn-danger waves-effect waves-light">
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
@include('Cau-Hoi.form-them')
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
<script>
    $(document).ready(function () {
          $('#form-add').submit(function(){
          var linh_vuc = $('#linh_vuc').val();
          var noi_dung = $('#noi_dung').val();
          var phuong_an_a = $('#phuong_an_a').val();
          var phuong_an_b = $('#phuong_an_b').val();
          var phuong_an_c = $('#phuong_an_c').val();
          var phuong_an_d = $('#phuong_an_d').val();
          var dap_an = $('#dap_an').val();
          var url = $(this).attr('data-url');
          e.preventDefault();
            $.ajax({
              type:'POST',
              url:url,
              data:{
                "linh_vuc":linh_vuc,
                "noi_dung":noi_dung,
                "phuong_an_a":phuong_an_a,
                "phuong_an_b":phuong_an_b,
                "phuong_an_c":phuong_an_c,
                "phuong_an_d":phuong_an_d,
                "dap_an":dap_an,
              },
               success: function(data) {
                if(data=="true"){
                    alert(data);
                }
              },
              error: function (jqXHR, textStatus, errorThrown) {
                //xử lý lỗi tại đây
                alert("loi");
              }
            });
        });


        $('.btn-edit').click(function(e){

        var url = $(this).attr('data-url');
        //alert(id);
        $('#modal-edit').modal('show');

        e.preventDefault();

        $.ajax({
            //phương thức get
            type: 'get',
            url:url,
            success: function (response) {
              //đưa dữ liệu controller gửi về điền vào input trong form edit.
              $('#id_type-edit').val(response.data.id_type);
              $('#ten_san_pham-edit').val(response.data.name);
              $('#price-edit').val(response.data.promotion_price);
              $('#img').html('<img src="../../image/product/' + response.data.image + '" style="height:80px;"/>');
              $('#unit-edit').val(response.data.unit);
              //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
              //$('#form-edit').attr("data-url","Crudajax/update/"+response.data.id);
            },
          });
      });

    });
</script>
@endsection
