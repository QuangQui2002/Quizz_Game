@extends('pages.billing')
@section('content-fieldquestion')
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
      
      <form action="{{ url('fieldquestions/' .$fieldquestion->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <label>Tên lĩnh vực</label> 
        <input type="text" name="namefield" id="namefield" value="{{$fieldquestion->namefield}}" class="form-control px-1"> 
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