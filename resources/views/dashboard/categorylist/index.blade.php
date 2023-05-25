@extends('layouts.dashboard')
@section('page_title')
    Admin Dashboard | Category List
@endsection
@section('dashboard_content')

<div class="card">
    <div class="row align-items-center ">
        <div class="col-md-10 col-lg-10">
            <h5 class="card-header">Users</h5>
        </div>
        <div class="col-md-2 col-lg-2">
                <a href="{{ route('categorylist.create') }}" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="table-responsive text-nowrap p-3">
<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
          <thead>
          <tr>

            <th>S.No</th>
            <th>Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($data as $user )

            <tr>

                <td class="text-capitalize">{{ $count++ }}</td>
                <td  class="text-capitalize">
                  
                    <strong>{{ $user->name }}</strong></td>

           <td>
                <a class="text-danger" href="{{route('categorylist.delete',$user->id)}}"><i class="bx bx-trash me-1">Delete</i></a> |
                <a href="{{route('categorylist.update',$user->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>|
                {{-- <a class="text-success" href="{{route('user.profile',$user->id)}}"><i class="bx bx-id-card me-1"></i> View</a> --}}


              </td>
            </tr>
            @endforeach

        </tbody>
      </table>
      {{-- {!! $data->withQueryString()->links('pagination::bootstrap-5') !!} --}}

    </div>
  </div>
@endsection
