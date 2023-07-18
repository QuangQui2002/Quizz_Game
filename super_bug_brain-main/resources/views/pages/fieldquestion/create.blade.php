@extends('pages.billing')
@section('content-fieldquestion')
<div class="card">
  <div class="card-header">
    <h3>THÊM LĨNH VỰC</h3>
  </div>
  <div class="card-body">
      <form action="{{ url('fieldquestions') }}" method="post">
        {!! csrf_field() !!}   
          <div class="form-group">
            <label>Tên lĩnh vực</label> 
            <input type="text" name="namefield" id="namefield" class="form-control px-1" placeholder="Nhập tên lĩnh vực"> 
          </div>
          <div class="col-sm-3 form-group">
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