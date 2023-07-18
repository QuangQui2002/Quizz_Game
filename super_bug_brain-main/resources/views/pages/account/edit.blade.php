@extends('pages.billing')
@section('content-account')
<div class="card">
  <div class="card-header">
    <h3>TÀI KHOẢN
      @if($account->id < 10)
      0{{ $account->id }}
    @else
      {{ $account->id }}
    @endif 
      </h3>
  </div>
  <div class="card-body">
      
      <form action="{{ url('accounts/' .$account->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Tên tài khoản</label> 
        <input type="text" name="name" id="name" value="{{$account->name}}" class="form-control px-1"> 
        <!-- <div class="form-group">
          <label>Ảnh đại diện</label> <br>
          <input type="file" id="image" required />
        </div> -->
        <label>Email</label> 
        <input type="text" name="email" id="email" value="{{$account->email}}" class="form-control px-1"> 
        <!-- <label>Mật khẩu</label> 
        <input type="text" name="password" id="password" value="{{$account->password}}" class="form-control px-1">  -->
        {{-- <label>Điểm xếp hạng</label> 
        <input type="text" name="point" id="point" value="{{$account->point}}" class="form-control px-1">  --}}
        {{-- <div class="col-sm-3 form-group">
          <label>Xếp hạng</label> 
          <select name="status" id="status" class="form-select px-1 ">
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
        <!-- <label>Trang Thái</label> 
        <input type="text" name="role" id="role" value="{{$account->role}}" class="form-control px-1">  -->
        <div class="col-3 mb-3 form-group">
            <label>Trạng thái</label> 
              <select name="status" id="status" class="form-select px-1 ">
                <option value="1">Hoạt động</option>
                <option value="0">Không hoạt động</option>
            </select>
        </div>
        <input type="submit" value="Update" class="btn btn-success"> 
    </form>
  
  </div>
</div>
@stop