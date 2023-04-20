@extends('admin.layouts.Admin')
    @section('admin_contents')
    <div class="">
        <section class="content-header bg-dark pinned-2">
            <div class="">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Payments History</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Payments History-view</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="">
                    <div class="table-responsive ">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th>Payment ID</th>
                                    <th>Course Name</th>
                                    <th>Currency</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($payments->count() > 0)
                                    @foreach ( $payments as  $payments)
                                        <tr>
                                            <td>{{  $payments->orders_payment_id }}</td>
                                            <td>{{  $payments->products_name }}</td>
                                            <td>#</td>
                                            <td>{{  $payments->final_price }}</td>
                                            <td>
                                                @if ( $payments->orders_payment_status_id == 1)
                                                    <span class="badge badge-success"><p class="m-0">Completed</p></span>
                                                @elseif ( $payments->orders_payment_status_id == 0)
                                                    <span class="badge badge-danger"><p class="m-0">Failed</p></span>
                                                @elseif (!empty( $payments->orders_payment_status_id))
                                                    <span class="badge badge-primary"><p class="m-0">Pending</p></span>
                                                @endif
                                            </td>
                                            <td>{{  $payments->payment_mtd }}</td>
                                            <td>{{  $payments->created_at }}</td>
                                            <td>
                                                <a href="#">
                                                    <span class="badge badge-warning"><i class="fa fa-edit"></i></span>
                                                </a>
                                                <a href="#">
                                                    <span class="badge badge-success"><i class="fa fa-eye"></i></span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                <tr> <th colspan="10" class="text-center"> No payments yet </th> </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

