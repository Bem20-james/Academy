@extends('admin.layout.admin')
    @section('contents')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Admin Previlages</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">
                        @if ( $admin->role == 1 )
                                Super Admin
                            @elseif ($admin->role == 2)
                                Store Staff
                            @elseif ($admin->role == 4)
                                Admin Staff
                            @elseif ($admin->role == 5)
                                Delivery Staff
                            @elseif ($admin->role == 6)
                                Developer
                        @endif - {{ $admin->f_name }} {{ $admin->l_name }}</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
                <div class="row">
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <div class="col-12">
                        @if(count($errors) > 0)
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item text-danger">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>

                    <div class="col-12 mb-4">
                        <div class="box-footer mr-1">
                            <a href="{{ route('view.admin.roles') }}" type="button" class="btn btn-primary float-right"> View Admins Previlages</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">DASHBOARD (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'dashboard']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_dashboard == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_dashboard == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_dashboard == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">SUB CATEGORY (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'sub_categories']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_sub_categories == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_sub_categories == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_sub_categories == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">CATEGORY (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'categories']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_categories == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_categories == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_categories == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">LANGUAGE (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'language']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_language == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_language == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_language == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">CURRENCY (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'currency']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_currency == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_currency == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_currency == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">CUSTOMER (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'customers']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_customers == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_customers == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_customers == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">COUPON (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'coupons']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_coupons == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_coupons == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_coupons == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">SHIPPING METHOD (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'shipping_methods']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_shipping_methods == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_shipping_methods == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_shipping_methods == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">PAYMENT METHOD (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'payment_methods']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_payment_methods == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_payment_methods == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_payment_methods == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">TAX LOCATION (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'tax_location']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_tax_location == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_tax_location == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_tax_location == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">CHAT (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'chats']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_chats == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_chats == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_chats == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">AUTO PART (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'auto_parts']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_auto_parts == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_auto_parts == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_auto_parts == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">UNIT (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'units']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_units == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_units == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_units == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">PAGE (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'pages']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_pages == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_pages == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_pages == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">PRODUCT (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'products']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_products == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_products == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_products == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">REVIEW (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'review']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_review == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_review == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_review == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">COLOR (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'colors']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_colors == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_colors == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_colors == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">ORDER (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'orders']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_orders == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_orders == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_orders == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">REPORT (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'reports']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_reports == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_reports == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_reports == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">SHIPPING SERVICES (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'shipping_services']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_shipping_services == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_shipping_services == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_shipping_services == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">NOTIFICATIONS (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'notifications']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_notifications == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_notifications == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_notifications == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">SOCIAL LOGIN (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'social_login_settings']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_social_login_settings == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_social_login_settings == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_social_login_settings == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">STORE SETTINGS (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'store_settings']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_store_settings == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_store_settings == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_store_settings == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="card">
                            <div class="card-header bg-secondary text-center">MANAGE ADMINSTRATORS (PREVILAGES)</div>
                            <div class="card-body">
                                <form action="{{ route('update.admin.roles', ['id' => $admin->id, 'role_type' => 'manage_admins']) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="view" value="1" @if( $admin_roles->view_manage_admins == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox1">View</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="edit" value="1" @if( $admin_roles->edit_manage_admins == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox2">Edit</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="delete" value="1" @if( $admin_roles->delete_manage_admins == 1 ) checked @endif>
                                        <label class="form-check-label" for="inlineCheckbox3">Delete</label>
                                    </div>
                                    <div class="mt-1">
                                        <button type="submit" class="btn btn-primary form-control">Update</button>
                                    </div>
                                </form>
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
