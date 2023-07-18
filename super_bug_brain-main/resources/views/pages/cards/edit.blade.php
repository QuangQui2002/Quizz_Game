@extends('pages.billing')
@section('content-card')
<div class="card">
  <div class="card-header">
    <h3>Chỉnh sửa lĩnh vực</h3>
  </div>
  <div class="card-body">
      
      <form action="{{ url('cards/' .$card->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <div class="form-group">
            <label>Tên thẻ</label> 
            <input type="text" name="namecard" id="namecard" class="form-control px-1"  value="{{$card->namecard}}"> 
          </div>
          <div class="form-group">
            <label>Mệnh giá</label> 
            <input type="text" name="denominations" id="denominations" class="form-control px-1"  value="{{$card->denominations}}"> 
          </div>
          <div class="form-group">
            <label>Mã thẻ</label> 
            <input type="text" name="cardtype" id="cardtype" class="form-control px-1"  value="{{$card->cardtype}}"> 
          </div>
          <div class="form-group">
            <label>Số thẻ</label> 
            <input type="text" name="cardnumber" id="cardnumber" class="form-control px-1"  value="{{$card->cardnumber}}"> 
          </div>
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