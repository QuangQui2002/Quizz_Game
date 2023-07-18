@extends('pages.billing')
@section('content-card')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white mx-3"><strong>QUẢN LÝ THẺ NẠP </strong></h6>
                        </div>
                    </div>
                    <div class=" me-3 my-3 text-end">
                        <a href="{{ url('/cards/create') }}" class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                class="material-icons text-sm">add</i>THÊM THẺ NẠP</a>
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
                                        <th>Tên thẻ</th>
                                        <th>Mệnh giá</th>
                                        <th>Số seri</th>
                                        <th>Mã nạp</th>
                                        <th>Trạng thái</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($card as $item)
                                    <tr>
                                        <td class="px-4">{{ $loop->iteration }}</td>
                                        {{-- <td class="px-4">{{ $item->id }}</td> --}}
                                        <td class="px-4">{{ $item->namecard }}</td>
                                        <td class="px-4">{{ $item->denominations }}</td>
                                        <td class="px-4">{{ $item->cardtype}}</td>
                                        <td class="px-4">{{ $item->cardnumber }}</td>
                                        @if ($item->status == 1)
                                            <td class="">
                                                <span class="badge badge-sm bg-gradient-success">Hoạt động</span>
                                            </td>
                                        @else
                                            <td class="">
                                                <span class="badge badge-sm bg-gradient-secondary">Không hoạt động</span>
                                            </td>
                                        @endif
                                            
                                     
                                        <td class="px-4">
                                            <a href="{{ url('/cards/' . $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Xem</button></a>
                                            <a href="{{ url('/cards/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</button></a>
                                            @if ($item->status == 1)
                                            <form method="POST" action="{{ url('/fieldquestions' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button>
                                            </form>
                                            @endif
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