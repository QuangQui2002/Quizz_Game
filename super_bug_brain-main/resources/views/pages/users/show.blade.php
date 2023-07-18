
@extends('pages.billing')
@section('content-users')
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                 
                  <h3>NGƯỜI DÙNG
                    @if($users->id < 10)
                        0{{ $users->id }}
                    @else
                        {{ $users->id }}
                    @endif 
                    </h3>
              </div>
              <div class="card-body">
                      <p class="card-text">Tên tài khoản: {{ $users->name }}</p>
                      {{-- <p class="card-text">Ảnh đại diện: </p>
                      <img src="{{ $users->image }}" alt="Loading..." style="width:150;height:150;"> --}}
                      <p class="card-text">Email: {{ $users->email }}</p>
                      {{-- <p class="card-text">Mật khẩu: {{ $users->password }}</p> --}}
                      {{-- <p class="card-text">Điểm: {{ $users->point }}</p>
        
                        @if ($users->ranker==1)
                            <p class="card-text">Xếp hạng: Đồng</p>
                        @elseif($users->ranker==2)
                            <p class="card-text">Xếp hạng: Bạc</p>
                        @elseif($users->ranker==3)
                            <p class="card-text">Xếp hạng: Vàng</p>
                        @elseif($users->ranker==4)
                            <p class="card-text">Xếp hạng: Bạch kim</p>
                        @elseif($users->ranker==5)
                            <p class="card-text">Xếp hạng: Kim Cương</p>
                        @else
                            <p class="card-text">Xếp hạng: Huyền Thoại</p>
                        @endif --}}

                         @if ($users->role == 1)
                         <p class="card-text">Tài khoản Admin</p>
                        @else
                        <p class="card-text">Tài khoản Người Chơi</p>
                        @endif 

                        @if ($users->status == 1)
                            <p class="card-text">Trạng thái: Hoạt động</p>
                        @else
                        <p class="card-text">Trạng thái: Không hoạt động</p>
                        @endif 
                    </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
