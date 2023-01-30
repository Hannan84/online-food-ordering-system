@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead class="text-center">
                                <tr>
                                    <th>SN.</th>
                                    <th>Customer</th>
                                    <th>Order Id</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Payment Status</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                            @foreach($order as $key => $value)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$value->customer->first_name}}</td>
                                    <td>{{$value->order_detail->order_number}}</td>
                                    <td>{{$value->created_at->locale('is_IS')->isoFormat('Do MMM YYYY')}}</td>
                                    @if($value->order_status == 0)
                                    <td class="text-info">ordered</td>
                                    @endif
                                    @if($value->order_status == 1)
                                        <td class="text-warning">delivered</td>
                                    @endif
                                    @if($value->order_status == 2)
                                        <td class="text-success">complete delivered</td>
                                    @endif
                                    <td>{{$value->payment->payment_status}}</td>
                                    <td>{{$value->order_detail->quantity}}</td>
                                    <td>{{$value->order_detail->total_price}}</td>
                                    <td>#</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
