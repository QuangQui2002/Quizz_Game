
@extends('pages.billing')
@section('content-question')
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h3>CÂU HỎI 
                    @if($question->id < 10)
                      0{{ $question->id }}
                    @else
                      {{ $question->id }}
                    @endif 
                  </h3>
              </div>
              <div class="card-body">
              
                
                  @if ($question->category_id == 1)
                    <p class="card-text">Lĩnh vực: Tiếng Anh</p>
                  @elseif ($question->category_id == 2)
                    <p class="card-text">Lĩnh vực: Bóng Đá</p>
                  @elseif ($question->category_id == 3)
                    <p class="card-text">Lĩnh vực: Hóa học</p>
                  @elseif ($question->category_id == 4)
                    <p class="card-text">Lĩnh vực: Công Nghệ Thông Tin</p>
                  @else
                    <p class="card-text">Lĩnh vực: {{ $question->category_id }}</p>
                  @endif 
                
                  <p class="card-text">Nội dung câu hỏi: {{ $question->question }}</p>
                <p class="card-text">Đáp án đúng: {{ $question->correct_answer }}</p>
                <p class="card-text">Đáp án sai: {{ $question->incorrect1 }}</p>
                <p class="card-text">Đáp án sai: {{ $question->incorrect2 }}</p>
                <p class="card-text">Đáp án sai: {{ $question->incorrect3 }}</p>
              
                @if ($question->status == 1)
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