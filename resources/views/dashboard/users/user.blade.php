@extends('layouts.dashboard')
@section('page_title')
    Admin Dashboard | Users List
@endsection
@section('dashboard_content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center ">
                    <div class="col-md-10 col-lg-10">
                        <h5 class="card-header">Users</h5>
                    </div>
                    <div class="col-md-2 col-lg-2">
                        <a href="{{ route('user.create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>
                <hr>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                    <thead>
                       <tr>
                        <th>Profile Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Role</th>
                        <th>Created_At</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0 " id="user_table_body">
                        @foreach ($data as $user )
                    
                        <tr>
                            <td>
                                <img src="{{ asset('images/users/'.$user->userimage) }}" width="50px" height="50px" class="rounded-circle"
                                    alt="">
                            </td>
                            <td class="text-capitalize"> <strong>{{ $user->name
                                    }}</strong></td>
                            <td>{{ $user->email }}</td>
                            <td class="text-capitalize">{{ $user->gender }}</td>
                            <td class="text-capitalize">{{ $user->type }}</td>
                            <td class="text-capitalize">{{Carbon::parse($user['created_at'])->format('d M Y') }}</td>
                            <td>
                                @if($user->type!="admin")
                                <a class="text-danger" href="{{route('user.delete',$user->id)}}"><i class="bx bx-trash me-1">Delete</i></a>
                                |
                                <a href="{{route('user.update',$user->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                {{-- <a class="text-success" href="{{route('user.profile',$user->id)}}"><i class="bx bx-id-card me-1"></i>
                                    View</a> --}}
                    @else
                    <a href="{{route('user.update',$user->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>

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
{{-- <div class="card">
    <div class="row align-items-center ">
        <div class="col-md-10 col-lg-10">
            <h5 class="card-header">Users</h5>
        </div>
        <div class="col-md-2 col-lg-2">
                <a href="{{ route('user.create') }}" class="btn btn-primary">Create</a>
        </div>
    </div>
    
    <div class="table-responsive text-nowrap">
    <p class="text-muted font-14 mb-3">
     
  </p>
    
    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
          <tr>
            <th>Profile Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Role</th>
            <th>Created_At</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0 " id="user_table_body">
            @foreach ($data as $user )

            <tr>
                <td>
                    <img src="{{ asset('images/users/'.$user->userimage) }}"  width="50px" height="50px" class="rounded-circle" alt="">
                </td>
                <td  class="text-capitalize"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->name }}</strong></td>
                <td>{{ $user->email }}</td>
              <td class="text-capitalize">{{ $user->gender }}</td>
              <td  class="text-capitalize">{{ $user->type }}</td>
              <td  class="text-capitalize">{{Carbon::parse($user['created_at'])->format('d M Y') }}</td>
           <td>
                <a class="text-danger" href="{{route('user.delete',$user->id)}}"><i class="bx bx-trash me-1">Delete</i></a> |
                <a href="{{route('user.update',$user->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>|
                {{-- <a class="text-success" href="{{route('user.profile',$user->id)}}"><i class="bx bx-id-card me-1"></i> View</a> --}}


              {{-- </td>
            </tr>
            @endforeach

        </tbody>
      </table> 

    </div>
  </div> --}
    {{-- <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7">
                <h4 class="page-title">Users</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class=""><a href="{{ url('/admin') }}">Home </a></li>
                        <span>   /   </span>
                        <li class=""><a href="{{ url('/userdb') }}"> Users</a></li>
                    </ol>
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="widgetbar">
                    <a href="{{url('/userdbcreate')}}" class="btn btn-primary-rgba mr-2"><i class="fa-solid fa-file-plus"></i>Create User</a>

                </div>
            </div>
        </div>
    </div>

    <div class="contentbar">
        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="card-title mb-0">All Users</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="post" id="usersForm">
                                <table data-method="post" id="datatable-buttons"
                                    class="table table-borderless mrclsDtToShowData" data-url="usersData">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Country</th>
                                            <th>Created At</th>
                                            <th style="width: 200px;">Action</th>
                                        </tr>

                                        @foreach($data as $user)
                                        <tr>
                                            <td>{{$count++}}</td>
                                            <td> <img src="frontend/images/users/{{$user->userimage}}" height="50px" width="50px" alt=""> </td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->gender}}</td>

                                            <td>{{$user->countriesname}}</td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($user->created_at)->diffForhumans() }}
                                                </td>
                                            <td style="width: 200px;">
                                                <a class="text-danger" href="{{route('user.delete',$user->id)}}">Delete</a> |
                                                <a href="{{url('/userupdate',$user->id)}}">Update</a> |
                                                <a class="text-success" href="{{route('user.userprofile',$user->id)}}">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </thead>
                                </table>
                                {!! $data->withQueryString()->links('pagination::bootstrap-5') !!}

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
