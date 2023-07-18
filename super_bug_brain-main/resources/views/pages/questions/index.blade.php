@extends('pages.billing')
@section('content-question')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white mx-3"><strong>QUẢN LÝ CÂU HỎI </strong></h6>
                        </div>
                    </div>
                    <div class=" me-3 my-3 text-end">
                        <a href="{{ url('/questions/create') }}" class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                class="material-icons text-sm">add</i>THÊM CÂU HỎI</a>
                    </div>
                   
                <div class="card">
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
                                        {{-- <th>Lĩnh vực</th> --}}
                                        <th>Nội dung câu hỏi</th>
                                        {{-- <th>Đáo án đúng</th>
                                        <th>Đáp án sai 1</th> 
                                        <th>Đáp án sai 2</th>
                                        <th>Đáp án sai 3</th> --}}
                                        <th>Trạng thái </th>
                                        <th>Chức năng </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($questions as $item)
                                    <tr>
                                        <td class="px-4">{{ $loop->iteration }}</td>
                                        {{-- <td class="px-4">{{ $item->id }}</td> --}}
                                        {{-- <td class="px-4">{{ $item->category }}
                                        @foreach ($questions as $cat)
                                            <a value="{{$cat->id}}">{{$cat->namefield}}</a>   
                                        @endforeach
                                        </td> --}}
                                        <td class="px-4">{{ Str::limit($item->question,35) }}</td>
                                        {{-- <td class="px-4">{{ $item->correct_answer }}</td>
                                        <td class="px-4">{{ $item->incorrect1 }}</td>
                                        <td class="px-4">{{ $item->incorrect2 }}</td> 
                                        <td class="px-4">{{ $item->incorrect3 }}</td>   --}}
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
                                            <a href="{{ url('/questions' . '/' . $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Xem</button></a>
                                            <a href="{{ url('/questions' . '/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</button></a>
                                           
                                            <form action="{{ url('/questions' . '/' . $item->id) }}" method="post" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('PATCH') }}
                                                {{ csrf_field() }}
                                                @if ($item->status== 1)
                                                <input type="hidden" name="status" id="status" value="0">
                                                <button type="submit" onclick="return confirm('Are you sure to CLose it?')" class="btn btn-danger btn-sm"> Đóng</button>
                                               
                                                @else
                                                <input type="hidden" name="status" id="status" value="1">
                                                <button type="submit" onclick="return confirm('Are you sure to Open it?')" class="btn btn-danger btn-sm"> Mở</button>
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