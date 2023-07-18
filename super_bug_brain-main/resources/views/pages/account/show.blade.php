
@extends('pages.billing')
@section('content-account')
<div class="container">
  <div class="row">
      <div class="col-md-12">
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
                      <p class="card-text">Tên tài khoản: {{ $account->name }}</p>
                      {{-- <p class="card-text">Ảnh đại diện: </p>
                      <img src="{{ $account->image }}" alt="Loading..." style="width:150;height:150;">--}}
                      <p class="card-text">Email: {{ $account->email }}</p>
                      {{-- <p class="card-text">Mật khẩu: {{ $account->password }}</p>  --}}
                      {{-- <p class="card-text">Điểm: {{ $account->point }}</p>
        
                        @if ($account->ranker==1)
                            <p class="card-text">Xếp hạng: Đồng</p>
                        @elseif($account->ranker==2)
                            <p class="card-text">Xếp hạng: Bạc</p>
                        @elseif($account->ranker==3)
                            <p class="card-text">Xếp hạng: Vàng</p>
                        @elseif($account->ranker==4)
                            <p class="card-text">Xếp hạng: Bạch kim</p>
                        @elseif($account->ranker==5)
                            <p class="card-text">Xếp hạng: Kim Cương</p>
                        @else
                            <p class="card-text">Xếp hạng: Huyền Thoại</p>
                        @endif --}}

                         @if ($account->role == 1)
                         <p class="card-text">Tài khoản Admin</p>
                        @else
                        <p class="card-text">Tài khoản Editor</p>
                        @endif 

                        @if ($account->status == 1)
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
