@extends('pages.billing')
@section('content-user')
<div class="card">
  <div class="card-header">
    <h3>THÊM TÀI KHOẢN</h3>
  </div>
  <div class="card-body">
      <form action="{{ url('user') }}" method="post">
        {!! csrf_field() !!}   
          <div class="form-group">
            <label>Tên tài khoản</label> 
            <input type="text" name="name" id="name" class="form-control px-1" placeholder="Nhập tên người chơi"> 
          </div>
          <div class="form-group">
            <label>Ảnh đại diện</label> 
            <input class="form-control" name="image" type="file" id="image">
          </div>
          <div class="form-group">
            <label>Email</label> 
            <input type="text" name="email" id="email" class="form-control px-1" placeholder="Nhập email"> 
          </div>
          <div class="form-group">
            <label>Mật khẩu</label> 
            <input type="text" name="password" id="password" class="form-control px-1" placeholder="Nhập mật khẩu"> 
          </div>
          {{-- <div class="form-group">
            <label>Điểm</label> 
            <input type="text" name="point" id="point" class="form-control px-1" placeholder="Nhập điểm"> 
          </div>
          <div class="col-sm-3 form-group">
            <label>Xếp hạng</label> 
            <select name="ranker" id="ranker" class="form-select px-1 ">
              <option value="1">Đồng</option>
              <option value="2">Bạc</option>
              <option value="3">Vàng</option>
              <option value="4">Bạch Kim</option>
              <option value="5">Kim Cương</option>
              <option value="6">Huyền Thoại</option>   
            </select>
          </div> --}}
          <div class="col-3 mb-3 form-group">
            <label>Role</label> 
              <select name="status" id="status" class="form-select px-1 ">
                <option value="0">Admin</option>
                <option value="1">Editor</option>
            </select>
         </div>
          <div class="col-3 mb-3 form-group">
              <label>Trạng thái</label> 
                <select name="status" id="status" class="form-select px-1 ">
                  <option value="1">Hoạt động</option>
                  <option value="0">Không hoạt động</option>
                </select>
          </div>
        <input type="submit" value="Save" class="btn btn-success"> 
    </form>
  
  </div>
</div>
@stop