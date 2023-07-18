@extends('pages.billing')
@section('content-account')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white mx-3"><strong>QUẢN LÝ TÀI KHOẢN</strong></h6>
                        </div>
                    </div>
                    {{-- <div class=" me-3 my-3 text-end">
                        <a href="{{ url('/account/create') }}" class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                class="material-icons text-sm">add</i>THÊM TÀI KHOẢN</a>
                    </div> --}}
                   
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
                                        
                                        <th>Tên tài khoản</th>
                                        <!-- <th>Email</th>
                                        <th>Mật khẩu</th>
                                        <th>Xếp hạng</th>
                                        <th>Điểm</th> -->
                                        <th>Role</th> 
                                        <th>Trạng thái</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($account as $item)
                                    <tr>
                                        <td class="px-4">{{ $loop->iteration }}</td>
                                        {{-- <td class="px-4">{{ $item->id }}</td> --}}
                                        <!-- {{-- <td class="px-5">
                                            <img src="{{ asset('assets') }}/img/team-4.jpg"
                                            class="avatar avatar-sm me-3 border-radius-lg" alt="user3">
                                        </td> --}}
                                        <td>
                                            <img class="px-4" src="{{ asset($item->image) }}" width= '40' height='40' class="img img-responsive" />
                                        </td>
                                        {{-- <td class="px-4">{{ $item->image }}</td> --}} -->
                                        <td class="px-4">{{ $item->name }}</td>
                                        {{-- <td class="px-4">{{ $item->email }}</td>
                                        <td class="px-4">{{ $item->password }}</td>
                                        <td class="px-4">{{ $item->point }}</td>
                                        
                                        @if ($item->ranker==1)
                                            <td class="px-4">Đồng</td>
                                        @elseif($item->ranker==2)
                                            <td class="px-4">Bạc</td>
                                        @elseif($item->ranker==3)
                                            <td class="px-4">Vàng</td>
                                        @elseif($item->ranker==4)
                                            <td class="px-4">Bạch kim</td>
                                        @elseif($item->ranker==5)
                                            <td class="px-4">Kim Cương</td>
                                        @else
                                            <td class="px-4">Huyền Thoại</td>
                                        @endif

                                        <td class="px-4">{{ $item->role }}</td> --}}
                                        @if ($item->role == 1)
                                        <td class="px-4">
                                            <span class="">Admin</span>
                                        </td>
                                        @else
                                        <td class="px-4">
                                            <span class="">Editor</span>
                                        </td>
                                        @endif

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
                                            <a href="{{ url('/account/' . $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Xem</button></a>
                                            {{-- <a href="{{ url('/account/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</button></a> --}}
                                            {{-- @if ($item->status == 1)
                                            <form method="POST" action="{{ url('/account' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button>
                                            </form>
                                            @endif--}}
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