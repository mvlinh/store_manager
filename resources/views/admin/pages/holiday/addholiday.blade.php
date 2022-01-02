@extends('admin.home')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="row">
  <body>
  <div class="container" style="padding: 0 400px 0 0;">
 
		<div class="row" style="margin-top: 50px; line-height: 40px;">
            <div class="col-md-12 col-md-push-3">
                @if(!empty($noti))
                 <div class="alert alert-success"> {{ $noti }}</div>
                @endif
            </div>
            <div class="col-md-12 col-md-push-3">
                <form action="{{route('insertHoliday')}}" method="POST" enctype="multipart/form-data">
                    @csrf
						<legend>Thêm ngày nghỉ</legend>

						<div class="form-group">
							<label for="">Tên Sự kiện<span style="color: red;">(*)</span></label>
							<input type="text" required name="name" class="form-control" value="" placeholder="Tên sự kiện">
						</div>

                        <div class="form-group">
							<label for="">Chi tiết sự kiện <span style="color: red;">(*)</span></label>
							<input type="text" required name="detail" class="form-control" value="" placeholder="Chi tiết">
						</div>
                        <div class="form-group">
							<label for="">Ngày<span style="color: red;">(*)</span></label>
							<input type="date" required name="date" class="form-control" value="">
						</div>
						<div class="form-group">
							<label for="">Loại sự kiện<span style="color: red;">(*)</span></label>
							<select name="type" >
                                <option value="warning">Sự kiện rất quan trọng</option>
                                <option value="orange">Sự kiện quan trọng</option>
                                <option value="purple">Sự kiện ít quan trọng</option>
                                <option value="success">Sự kiện không quan trọng</option>
                            </select>
						</div>
						<button type="submit" name="sm_register" class="btn btn-danger">Xác nhận</button>
						<button type="reset" name="rs_register" class="btn btn-primary">Xóa</button>
                </form>
            </div>
            </div>
        </div>
    </div>
  </body>
</html>
@endsection