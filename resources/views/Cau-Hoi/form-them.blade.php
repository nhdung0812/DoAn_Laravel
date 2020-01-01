<div class="modal fade" id="modal-add">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" method="POST" data-url="{{  asset('cap-nhat/1') }}" id="form-add"  role="form" enctype="multipart/form-data">
				@csrf
				<div class="modal-header">
					<h4 class="modal-title">Thêm Câu Hỏi</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Chọn Lĩnh Vực</label>
						<select name="linh_vuc" id="id_type" class="form-control" required="required">
						@foreach($linhvuc as $lv)
							<option value="{{$lv->id}}">{{$lv->ten_linh_vuc}}</option>
						@endforeach
						</select>
					</div>

					<div class="form-group">
						<label for="">Nội Dung Câu Hỏi</label>
						<input name="noi_dung" type="text" class="form-control" id="noi_dung" placeholder="Nhập vào nội dung câu hỏi" required="required">
					</div>

					<div class="form-group">
						<label for="">Phương Án A</label>
						<input name="phuong_an_a" type="text" class="form-control" id="phuong_an_a" placeholder="Nhập vào phương án a" required="required">
					</div>

					<div class="form-group">
						<label for="">Phương Án B</label>
						<input name="phuong_an_b" type="text" class="form-control" id="phuong_an_b" placeholder="Nhập vào phương án b" required="required">
                    </div>
                    <div class="form-group">
						<label for="">Phương Án C</label>
						<input name="phuong_an_c" type="text" class="form-control" id="phuong_an_c" placeholder="Nhập vào phương án c" required="required">
                    </div>
                    <div class="form-group">
						<label for="">Phương Án D</label>
						<input name="phuong_an_d" type="text" class="form-control" id="phuong_an_d" placeholder="Nhập vào phương án d" required="required">
                    </div>
                    <div class="form-group">
						<label for="">Đáp Án</label>
						<input name="dap_an" type="text" class="form-control" id="dap_an" placeholder="Nhập vào đáp án" required="required">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Thêm</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
		
</script>