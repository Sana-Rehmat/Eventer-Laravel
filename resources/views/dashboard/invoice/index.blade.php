@extends('layouts.dashboard')
@section('page_title')
Admin Dashboard | Orders List
@endsection
@section('dashboard_content')
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
                        <th>Vendor</th>
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
                    @if ($service->id==$invoice->service_id )
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
                                        src="{{ asset('images/users/' . $user->userimage) }}" alt="User Image" width="50px">
                                </a>
                                <a href="customer-profile.html">{{ $user->name }}
                                    <br>
                                    <p>{{ $user->email }}</p>

                                </a>
                            </h2>
                        </td>
                        @endif
                        
                        @endforeach
                        <td>
                            <h2 class="table-avatar">
                        
                                <a href="#" class="avatar avatar-sm mr-2">
                        
                                    <img class="avatar-img rounded-circle" src="{{ asset('images/users/' . $service->user->userimage) }}"
                                        alt="User Image" width="50px">
                                </a>
                                <a href="customer-profile.html">{{ $service->user->name }}
                                    <br>
                                    <p>{{ $service->user->email }}</p>
                        
                                </a>
                            </h2>
                        </td>
                        <td>RS {{ $invoice->price }}</td>
                        <td>{{ $invoice->from }}</td>
                        <td>{{ $invoice->to }}</td>
                        <td>{{ $invoice->address }}</td>
                        <td>
                            {{$service->short_description}}
                        </td>

                        <td class="text-right">
                            <button type="button" class="btn btn-outline-info">Pending</button>
                                

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
