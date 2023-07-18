@extends('pages.billing')
@section('content-fieldquestion')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white mx-3"><strong>QUẢN LÝ LĨNH VỰC </strong></h6>
                        </div>
                    </div>
                    <div class=" me-3 my-3 text-end">
                        <a href="{{ url('/fieldquestions/create') }}" class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                class="material-icons text-sm">add</i>THÊM LĨNH VỰC</a>
                    </div>
                   
                    <div class="card-body">
                        @if (Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                        @endif                  
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Tên lĩnh vực</th>
                                        <th>Trạng thái</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($fieldquestion as $item)
                                    <tr>
                                        <td class="px-4">{{ $loop->iteration }}</td>
                                        {{-- <td class="px-4">{{ $item->id }}</td> --}}
                                        <td class="px-4">{{ $item->namefield }}</td>
                                        @if ($item->status == 1)
                                            <td class="px-4">
                                                <span class="badge badge-sm bg-gradient-success">Hoạt động</span>
                                            </td>
                                        @else
                                            <td class="px-4">
                                                <span class="badge badge-sm bg-gradient-secondary">Không hoạt động</span>
                                            </td>
                                        @endif
                                            
                                     
                                        <td class="px-4">
                                            <a href="{{ url('/fieldquestions/' . $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Xem</button></a>
                                            <a href="{{ url('/fieldquestions/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</button></a>
                                            <form action="{{ url('/fieldquestions' . '/' . $item->id) }}" method="post" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}
                                                @if ($item->status== 1)
                                                <input type="hidden" name="status" id="status" value="0">
                                                <button type="submit" onclick="return confirm('Are you sure to CLose it?')" class="btn btn-danger btn-sm"> Đóng</button>
                                                @else
                                                <button type="submit" onclick="return confirm('Are you sure to Open it?')" class="btn btn-danger btn-sm"> Mở</button>
                                                <input type="hidden" name="status" id="status" value="1">
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection