@extends('pages.billing')
@section('content-card')
<div class="card">
  <div class="card-header">
    <h3>THÊM THẺ NẠP</h3>
  </div>
  <div class="card-body">
      <form action="{{ url('cards') }}" method="post">
        {!! csrf_field() !!}   
          <div class="form-group">
            <label>Tên thẻ</label> 
            <input type="text" name="namecard" id="namecard" class="form-control px-1" placeholder="Nhập tên lĩnh vực"> 
          </div>
          <div class="form-group">
            <label>Mệnh giá</label> 
            <input type="text" name="denominations" id="denominations" class="form-control px-1" placeholder="Nhập tên lĩnh vực"> 
          </div>
          <div class="form-group">
            <label>Mã thẻ</label> 
            <input type="text" name="cardtype" id="cardtype" class="form-control px-1" placeholder="Nhập tên lĩnh vực"> 
          </div>
          <div class="form-group">
            <label>Số thẻ</label> 
            <input type="text" name="cardnumber" id="cardnumber" class="form-control px-1" placeholder="Nhập tên lĩnh vực"> 
          </div>
          <div class="col-3 mb-3 form-group">
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