@extends('layouts.layout')

@section('content')
@if(Auth::user()->role_id==1 || Auth::user()->role_id==2)

 <!-- Hero -->

                <div class="#bg-gd-dusk">
                    <div class="bg-black-op-25">
                        <div class="content content-top content-full text-center">
                            <div class="mb-20">
                                <a class="img-link" href="be_pages_ecom_customer.html">
                                    <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar15.jpg" alt="">
                                </a>
                            </div>
                            <h1 class="h3 text-white font-w700 mb-10">
                                {{ $contrib->name}} <i class="fa fa-star text-warning"></i>
                            </h1>
                            <h2 class="h5 text-white-op">
                                  Contributor in Syndication-bazaar <a class="text-primary-light link-effect" href="javascript:void(0)"></a>
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Breadcrumb -->
                <div class="bg-body-light border-b">
                    <div class="content py-5 text-center">
                        <nav class="breadcrumb bg-body-light mb-0">
                            <!-- <a class="breadcrumb-item" href="be_pages_ecom_dashboard.html">e-Commerce</a>
                            <a class="breadcrumb-item" href="javascript:void(0)">Customers</a>
                            <span class="breadcrumb-item active">John Smith</span> -->
                        </nav>
                    </div>
                </div>
                <!-- END Breadcrumb -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Overview -->
                    <h2 class="content-heading">Overview</h2>
                    <div class="row gutters-tiny">
                        <!-- Orders -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-line-chart fa-2x text-body-bg-dark"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                         <div class="font-size-h2 font-w700 mb-0" data-toggle="countTo" data-to="{{$list}}">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Features</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Orders -->
                            @php $single_val =explode(",", $order_info);  @endphp
                        <!-- In Cart -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-shopping-cart fa-2x text-body-bg-dark"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0" data-toggle="countTo" data-to="{{ $single_val[2] }}">0</div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Images Sold</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END In Cart -->

                        <!-- Edit Customer -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-user fa-2x text-info-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-info">
                                          R {{ $single_val[0] }}
                                        </div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Total Amount</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Edit Customer -->

                        <!-- Remove Customer -->
                        <div class="col-md-6 col-xl-3">
                            <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                                <div class="block-content block-content-full block-sticky-options">
                                    <div class="block-options">
                                        <div class="block-options-item">
                                            <i class="fa fa-user fa-2x text-danger-light"></i>
                                        </div>
                                    </div>
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-danger">
                                            R {{ $single_val[1] }}
                                        </div>
                                        <div class="font-size-sm font-w600 text-uppercase text-muted">Commission Due</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Remove Customer -->
                    </div>
                    <!-- END Overview -->

                    <!-- Addresses -->
                    <h2 class="content-heading">Contributor Personal info</h2>
                    <div class="row row-deck gutters-tiny">
                        <!-- Billing Address -->
                        <div class="col-md-6">
                            <div class="block block-rounded">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Contact</h3>
                                </div>
                                <div class="block-content">
                                    <div class="font-size-lg text-black mb-5">{{ $contrib->name}} </div>
                                    <address>

                                        <i class="fa fa-phone mr-5"></i> {{ $contrib->phone}}<br>
                                        <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)"> {{ $contrib->email}}</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- END Billing Address -->

                        <!-- Shipping Address -->
                        <div class="col-md-6">
                            <div class="block block-rounded">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Contract</h3>
                                </div>
                                <div class="block-content">
                                    <div class="font-size-lg text-black mb-5">John Smith</div>
                                    <address>
                                        5110 8th Ave<br>
                                        New York 11220<br>
                                        United States<br><br>
                                        <i class="fa fa-phone mr-5"></i> (999) 111-222222<br>
                                        <i class="fa fa-envelope-o mr-5"></i> <a href="javascript:void(0)">company@example.com</a>
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- END Shipping Address -->
                    </div>
                    <!-- END Addresses -->

                    <!-- Cart -->
                    <h2 class="content-heading">Image Sold</h2>
                    <div class="block block-rounded">
                        <div class="block-content">
                            <!-- Products Table -->
                            <table class="table table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">ID</th>
                                        <th class="d-none d-sm-table-cell" style="width: 120px;">Status</th>
                                        <th class="d-none d-sm-table-cell" style="width: 120px;">Sold</th>
                                        <th>Image</th>
                                        <th class="d-none d-md-table-cell">Feature</th>
                                        <th class="text-right">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($albums as $album)
                                    @if(array_key_exists($album->id, $album_id))

                                    @endif
                                @endforeach
                                @foreach($orders as $ord)

                                    <tr>
                                        <td>
                                            <a class="font-w600" href="#">{{ $ord->id }}</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <span class="badge badge-danger">Not Paid</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            @php $date = explode(" ", $ord->created_at) @endphp  {{ $date[0] }}                     </td>
                                        <td>
                                            {{ $ord->imagename }}
                                        </td>
                                        <td class="d-none d-md-table-cell">

                                                @if(array_key_exists($ord->image_id, $album_id))
                                                    @foreach($albums as $alb)
                                                        @if($alb->id==$album_id[$ord->image_id])
                                                        <a href="/archive/{{ $alb->id }}/thumbnail"> {{ $alb->names }} </a>
                                                           @break;
                                                        @endif
                                                    @endforeach
                                                 @endif

                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">{{ $ord->amount }}</span>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <!-- END Products Table -->
                        </div>
                    </div>
                    <!-- END Cart -->

                    <!-- Past Orders -->
                    <h2 class="content-heading">Past Orders</h2>
                    <div class="block block-rounded">
                        <div class="block-content">
                            <!-- Orders Table -->
                            <table class="table table-borderless table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">ID</th>
                                        <th style="width: 120px;">Status</th>
                                        <th class="d-none d-sm-table-cell" style="width: 120px;">Sold</th>
                                        <th class="d-none d-sm-table-cell">Image</th>
                                        <th class="text-right">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.532</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Paid</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/27                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">John Smith</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$570</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.291</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Paid</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/26                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">John Smith</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$395</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.462</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Paid</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/25                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">John Smith</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$423</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.536</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Paid</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/24                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">John Smith</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$890</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-w600" href="be_pages_ecom_order.html">ORD.988</a>
                                        </td>
                                        <td>
                                            <span class="badge badge-success">Paid</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2017/10/23                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">John Smith</a>
                                        </td>
                                        <td class="text-right">
                                            <span class="text-black">$429</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END Orders Table -->
                        </div>
                    </div>
                    <!-- END Past Orders -->

                    <!-- Private Notes -->
                    <h2 class="content-heading">Private Notes</h2>
                    <div class="block block-rounded">
                        <div class="block-content">
                            <div class="alert alert-info alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <p class="mb-0"><i class="fa fa-info-circle mr-5"></i> Upload sales reports  view commssion due to contributors</p>
                            </div>
                            <form action="{{ route('submit-csv') }}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group row mb-10">
                                    <div class="col-12">
                                        <input class="form-control"  type="file"  name="csvfile" >
                                        @if($errors->any())
                                            @foreach($errors->all() as $error)
                                                <span class="alert alert-danger">{{ $error }}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-alt-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Private Notes -->
                </div>

@endif
@endsection