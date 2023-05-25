@extends('layouts.app')
@section('page_title')
Home |Order List
@endsection
@section('content')
<div class="card card-table mt-5 pt-3">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover table-center mb-0">
                <thead>
                    <tr>
                        <th>order No</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Address</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order )
                    @foreach ($services as $service )
                    @if ($service->id==$order->service_id)
                    <tr>
                        <td>
                            <a href="order-view.html">#INV-00{{ $order->id }}</a>
                        </td>


                        <td>
                            @foreach ($users as $user )
                            @if ($service->user_id==$user->id)
                            <h2 class="table-avatar">

                                <a href="#" class="avatar avatar-sm mr-2">

                                    <img class="avatar-img rounded-circle"
                                        src="{{ asset('images/users/' . $user->userimage) }}" alt="User Image"
                                        height="70px" width="70px">
                                </a>

                                <a href="customer-profile.html">{{ $user->name }}
                                    <span>{{ $user->email }}</span>
                                    {{-- <span>{{ $invoice->phone }}</span> --}}
                                </a>
                            </h2>
                            @endif
                            @endforeach

                        </td>

                        <td>RS {{ $order->price }}</td>
                        <td>{{ $order->from }}</td>
                        <td>{{ $order->to }}</td>
                        <td>{{ $order->address }}</td>
                        <td class="text-right">
                            @if ($order->status==0)
                            <div class="text-info">Pending</div>
                            @elseif ($order->status==1)
                            <div class="text-Danger">Canceled</div>
                            @elseif ($order->status==2)
                            <div class="text-success">Completed</div>

                            @endif
                        </td>
                        <td class="text-right">
                            @if ($order->status==0)
                            <a href="{{ route('order.cancel',$order->id) }}" class="btn btn-danger">Cancel</a>
                            @endif
                            @foreach ($reviews as $review )
                            @if ($review->order_id==$order->id && $order->status==2)
                            <a href="#" class="btn btn-Success">Reviewd</a> 
                            @elseif($order->status==2 && $review->order_id=='')
                            <a href="{{ route('review.create',['order_id'=>$order->id,'user_id'=>$user->id]) }}" class="btn btn-Success">Review</a>
                            @endif
                            @endforeach
                            {{-- @if ($order->status==2)
                           
                            <a href="{{ route('review.create',$service->user_id) }}" class="btn btn-Success">Review</a>
                            @endif --}}

                            {{-- @endforeach
                            @endif --}}

                        </td>
                    </tr>
                    @endif

                    @endforeach
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
