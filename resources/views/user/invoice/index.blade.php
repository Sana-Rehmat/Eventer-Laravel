@extends('layouts.vendor')
@section('page_title')
Vendor Dashboard | Invoice List
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title"> Orders Invoices</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
<div class="card card-table">
    <div class="card-body">

        <div class="row  justify-content-end  my-3">
            <div class="col-7">
                <h4 class="card-title  pl-3">Invoices</h4>
            </div>
            <div class="col-5">
                <!-- Button trigger modal -->
                <a href="{{ route('orders.complete.list') }}" class="btn btn-blue text-light">Completed Orders</a>
                <a href="{{ route('orders.canceled.list') }}" class="btn btn-blue text-light">Canceled Orders</a>
            </div>
        </div>
        <div class="container">
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                    <tr>
                        <th>Invoice No</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Address</th>
                        <th>Service Title</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0 " id="user_table_body">
                    @foreach ($services as $service )
                    @foreach ($invoices as $invoice )
                    @if ($service->id==$invoice->service_id && $invoice->status==0)
                    <tr>
                        <td>
                            <a href="invoice-view.html">#INV-00{{ $invoice->id }}</a>
                        </td>
                        @foreach ($users as $user)
                        @if ($invoice->user_id==$user->id)

                        <td>
                            <h2 class="table-avatar">

                                <a href="#" class="avatar avatar-sm mr-2">

                                    <img class="avatar-img rounded-circle"
                                        src="{{ asset('images/users/' . $user->userimage) }}" alt="User Image">
                                </a>
                                <a href="customer-profile.html">{{ $user->name }}
                                    <br>
                                    <p>{{ $user->email }}</p>

                                </a>
                            </h2>
                        </td>
                        @endif
                        @endforeach
                        <td>RS {{ $invoice->price }}</td>
                        <td>{{ $invoice->from }}</td>
                        <td>{{ $invoice->to }}</td>
                        <td>{{ $invoice->address }}</td>
                        <td>
                            {{$service->short_description}}
                        </td>

                        <td class="text-right">
                            <div class="table-action">
                                <a href="{{ route('order.complete',$invoice->id) }}" class="btn btn-sm bg-info-light">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    Done
                                </a>
                                <a href="{{ route('order.cancel',$invoice->id) }}" class="btn btn-sm bg-danger-light">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                    Cancel
                                </a>

                        </td>
                    </tr>
                    @endif

                    @endforeach
                    @endforeach </tbody>
            </table>

        </div>
    </div>

</div>
@endsection
