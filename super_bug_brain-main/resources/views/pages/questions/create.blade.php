@extends('pages.billing')
@section('content-question')
<div class="card">
  <div class="card-header"> 
    <h3>THÊM CÂU HỎI</h3>
  </div>
  <div class="card-body col-md-12">
      <form action="{{ url('questions') }}" method="post">
        {!! csrf_field() !!}
          <div class="form-group ">
            <label>Nội dung câu hỏi</label> 
            <input type="text" name="question" id="question" class="form-control px-1" placeholder="Nhập nội dung câu hỏi"> 
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label>Đáp án đúng </label> 
              <input type="text" name="correct_answer" id="correct_answer" class="form-control px-1" placeholder="Nhập đáp án A"> 
            </div>
            <div class="form-group col-md-6">
              <label>Đáp án sai 1 </label> 
              <input type="text" name="incorrect1" id="incorrect1" class="form-control px-1" placeholder="Nhập đáp án A"> 
            </div> 
          </div>
          <div class="row">
            <div class="form-group col-md-6">
                <label>Đáp án sai 2 </label> 
                <input type="text" name="incorrect2" id="incorrect2" class="form-control px-1" placeholder="Nhập đáp án B"> 
            </div> 
            <div class="form-group col-md-6">
                <label>Đáp án sai 3 </label> 
                <input type="text" name="incorrect3" id="incorrect3" class="form-control px-1" placeholder="Nhập đáp án C"> 
            </div>
          </div>
          <div class="row">  
            <div class="mb-3 col-md-6 form-group">
              <label>Lĩnh vực</label>  <br>
              <select name="category_id" class="form-select px-1 ">
                @foreach ($questions as $cat)
                  <option value="{{$cat->id}}">{{$cat->namefield}}</option>     
                @endforeach
              </select>
              {{-- <select name="category" id="category" class="form-select px-1">
                <option value="1">Tiếng Anh</option>
                <option value="2">Bóng Đá</option>
                <option value="3">Hóa Học</option>
                <option value="4">IT</option>
              </select> --}}
            </div>  
            <div class="mb-3 col-md-6 form-group">
                <label>Trạng thái</label> 
                  <select name="status" id="status" class="form-select px-1 ">
                    <option value="1">Hoạt động</option>
                    <option value="0">Không hoạt động</option>
                  </select>
            </div>
          </div>
        <input type="submit" value="Save" class="btn btn-success"> 
    </form>
  </div>
</div>
@stop