
@extends('pages.billing')
@section('content-card')
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                 
                  <h3>Thẻ nạp {{ $card->id }} </h3>
              </div>
              <div class="card-body">
                      <p class="card-text">Tên thẻ: {{ $card->namecard }}</p>
                      <p class="card-text">Mệnh giá: {{ $card->denominations }}đ</p>
                      <p class="card-text">Số seri: {{ $card->cardtype }}</p>
                      <p class="card-text">Mã nạp: {{ $card->cardnumber }}</p>
         
                      @if ($card->status == 1)
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
