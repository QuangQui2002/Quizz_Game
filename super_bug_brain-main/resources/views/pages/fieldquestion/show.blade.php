
@extends('pages.billing')
@section('content-fieldquestion')
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h3>LĨNH VỰC 
                    @if($fieldquestion->id < 10)
                        0{{ $fieldquestion->id }}
                    @else
                        {{ $fieldquestion->id }}
                    @endif 
                    </h3>
              </div>
              <div class="card-body">
                      <p class="card-text">Tên lĩnh vực: {{ $fieldquestion->namefield }}</p>
                      
                      @if ($fieldquestion->status == 1)
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
