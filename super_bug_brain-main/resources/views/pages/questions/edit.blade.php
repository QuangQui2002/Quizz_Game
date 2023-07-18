@extends('pages.billing')
@section('content-question')
<div class="card">
  <div class="card-header">
    <h3>CÂU HỎI 
      @if($questions->id < 10)
        0{{ $questions->id }}
      @else
        {{ $questions->id }}
      @endif 
    </h3>
  </div>
  <div class="card-body">
      
      <form action="{{ url('questions/' .$questions->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <div class="form-group ">
          <label>Nội dung câu hỏi</label> 
          <input type="text" name="question" id="question" value="{{$questions->question}}" class="form-control px-1" > 
        </div>
        <div class ="row">
          <div class="form-group col-md-6">
              <label>Đáp án đúng</label> 
              <input type="text" name="correct_answer" id="correct_answer" value="{{$questions->correct_answer}}" class="form-control px-1" placeholder="Nhập đáp án C"> 
          </div>
          <div class="form-group col-md-6">
              <label>Đáp án sai 1</label> 
              <input type="text" name="incorrect1" id="incorrect1" value="{{$questions->incorrect1}}" class="form-control px-1" placeholder="Nhập đáp án D"> 
          </div>
        </div>
        <div class ="row">
          <div class="form-group col-md-6">
            <label>Đáp án sai 2</label> 
            <input type="text" name="incorrect2" id="incorrect2" value="{{$questions->incorrect2}}" class="form-control px-1" placeholder="Nhập đáp án D"> 
          </div>
          <div class="form-group col-md-6">
            <label>Đáp án sai 3</label> 
            <input type="text" name="incorrect3" id="incorrect3" value="{{$questions->incorrect3}}" class="form-control px-1" placeholder="Nhập đáp án D"> 
          </div>
        </div>
        <div class="row">  
          <div class="mb-3 col-md-6 form-group">
            <label>Lĩnh vực</label> 
            {{-- <select name="category_id" class="form-select px-1 ">
              @foreach ($questions as $cat)
                <option value="{{$cat->id}}">@if($cat->id=old('fieldquestion', $p->category_id))
                  selected @endif>{{$cat->namefield}}</option>     
              @endforeach
            </select> --}}
            <select name="category" id="category" value="{{$questions->category_id}}" class="form-select px-1">
              <option value="1">Tiếng Anh</option>
              <option value="2">Bóng Đá</option>
              <option value="3">Hóa Học</option>
              <option value="4">Công Nghệ Thông Tin</option>
            </select>
          </div>  
          <div class="mb-3 col-md-6 form-group">
              <label>Trạng thái</label> 
                <select name="status" id="status" value="{{$questions->status}}" class="form-select px-1 ">
                  <option value="1">Hoạt động</option>
                  <option value="0">Không hoạt động</option>
              </select>
          </div>
        </div>
        <input type="submit" value="Update" class="btn btn-success"> 
    </form>
  
  </div>
</div>
@stop