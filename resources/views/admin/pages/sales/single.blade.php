@extends('admin.layouts.admin')
@section('admin_layout')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('view.orders') }}">Orders</a></li>
                    <li class="breadcrumb-item active">View</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- /.box-body -->

            <div class="container-fluid">
                <div class="col-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <table class="table table-sm table-bordered bg-white">
                    <div class="table-header table-active p-2 text-center"><h4 class="m-0">#{{ $order['orders']->orders_id }} - {{ $order['product']->prdt_name }}</h4></div>
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#Order_Id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Type</th>
                        <th scope="col">Product Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $order['orders_products'] as $prdt )
                            <tr>
                                <th scope="row">#{{ $prdt->orders_id }}</th>
                                <td>{{ $prdt->products_name }}</td>
                                <td>{{ $prdt->products_type }}</td>
                                <td>X{{ $prdt->products_quantity }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                <div class="row">

                    <div class="col-12">
                        <div class="card card-body">
                            <div class="header">
                               <h2>Order Details</h2>
                               <hr>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p>Order: <span class="text-uppercase font-weight-bolder">#{{ $order['orders']->orders_id }}</span></p>
                                    <p>Tax: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->currency }}{{ $order['orders']->total_tax }}</span></p>
                                    <p>Delivery Name: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->delivery_f_name }} {{ $order['orders']->delivery_l_name }}</span></p>
                                    <p>Delivery Country: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->delivery_country }}</span></p>
                                    <p>Delivery State: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->delivery_state }}</span></p>
                                    <p>Delivery Postcode: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->customers_postcode }}</span></p>
                                    <p>Delivery Phone: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->delivery_phone }}</span></p>
                                    <p>Email: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->email }}</span></p>
                                </div>
                                <hr>

                                <div class="col-lg-6 col-md-12">
                                    <p>Date:<span class="text-uppercase font-weight-bolder">{{ $order['orders']->date_purchased }}</span></p>
                                    <p>Currency: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->currency }}</span></p>
                                    <p>Amount: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->currency }}{{ $order['orders']->order_price }}</span></p>
                                    <p>Shipping Cost: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->shipping_cost }}</span></p>
                                    <p>Shipping Method: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->shipping_method }}</span></p>
                                    <p>Coupon code: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->coupon_code }}</span></p>
                                    <p>Coupon amount: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->coupon_amount }}</span></p>
                                    <p>Source: <span class="text-uppercase font-weight-bolder">{{ $order['orders']->ordered_source }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card card-body">

                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="header">
                                        <h2>Order Status</h2>
                                        <hr>
                                    </div>
                                    @foreach ( $order['orders_history'] as $order_history )
                                        <?php
                                            if($order_history->orders_status_id == 1){
                                                $status = "Pending";
                                                $badge = "btn-primary";
                                            }elseif($order_history->orders_status_id == 2){
                                                $status = "In progres";
                                                $badge = "btn-secondary";
                                            }elseif($order_history->orders_status_id == 3){
                                                $status = "Delivered";
                                                $badge = "btn-success";
                                            }elseif($order_history->orders_status_id == 4){
                                                $status = "Canceled";
                                                $badge = "btn-danger";
                                            }
                                        ?>
                                        <p><span class="btn {{ $badge }} font-weight-bolder">{{ $status }}</span> <span>Updated By: {{ $order_history->updated_by }}</span></p>
                                    @endforeach

                                    <form action="{{ route('order.update.status') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="order_id" value="{{ $order['orders']->orders_id }}">
                                        <select class="form-control" name="order_status">
                                            <option value="" disabled>{{ $status }}</option>
                                            <option value="1">Pending</option>
                                            <option value="2">In progress</option>
                                            <option value="3">Delivered</option>
                                            <option value="4">Canceled</option>
                                        </select>

                                        @if ( $roles->edit_orders == 1 )
                                            <div class="mt-2">
                                                <button style="width: 100%;" type="submit" class="btn btn-success">Update Order Status</button>
                                            </div>
                                        @endif
                                    </form>
                                </div>
                                <hr>

                                <div class="col-lg-6 col-md-12">
                                    <div class="header">
                                        <h2>Order Payment Status</h2>
                                        <hr>
                                    </div>
                                    @foreach ( $order['order_payments'] as $payment_history )
                                        <?php
                                            if($payment_history->orders_payment_status_id == 1){
                                                $status = "Pending";
                                                $badge = "btn-primary";
                                            }elseif($payment_history->orders_payment_status_id == 2){
                                                $status = "Processing";
                                                $badge = "btn-secondary";
                                            }elseif($payment_history->orders_payment_status_id == 3){
                                                $status = "Successful";
                                                $badge = "btn-success";
                                            }elseif($payment_history->orders_payment_status_id == 4){
                                                $status = "Failed";
                                                $badge = "btn-danger";
                                            }
                                        ?>
                                        <p><span class="btn {{ $badge }} font-weight-bolder">{{ $status }}</span> <span>Updated By: {{ $payment_history->updated_by }}</span></p>
                                    @endforeach

                                    <form action="{{ route('payment.update.status') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="order_id" value="{{ $order['orders']->orders_id }}">
                                        <select class="form-control" name="payment_status">
                                            <option value="" disabled>{{ $status }}</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Processing</option>
                                            <option value="3">Successful</option>
                                            <option value="4">Failed</option>
                                        </select>

                                        @if ( $roles->edit_orders == 1 )
                                            <div class="mt-2">
                                                <button style="width: 100%;" type="submit" class="btn btn-success">Update Payment Status</button>
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
