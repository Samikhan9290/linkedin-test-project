@extends('layouts.admin')

@section('title','Create Company eCommerce - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard')

@section('meta-tags')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
@stop

@section('top-css')

@stop

@section('theme-css')
    <link rel="apple-touch-icon" href="{{asset('/ModernAdmin')}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/ModernAdmin')}}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/fonts/material-icons/material-icons.css">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/vendors/css/material-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/css/material.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/css/material-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/css/material-colors.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/css/core/menu/menu-types/material-vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/app-assets/css/pages/dashboard-ecommerce.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/ModernAdmin')}}/assets/css/style.css">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@stop

@section('lower-css')

@stop

@section('content-body')
    <!-- eCommerce statistic -->

    <div class="row">
        <div class="col-md-12">
            @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card" style="height: 882.281px;">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-tooltip">Add Employee</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">



                        <form class="form" method="POST" action="{{route('employee.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">

                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="firstName">First Name</label>
                                         <input type="text" id="firstName" class="form-control" placeholder="Name" name="firstName" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Name" data-original-title="" title="">
                                     </div>
                                     @error('firstName')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="name">Last Name</label>
                                         <input type="text" id="lastName" class="form-control" placeholder="Name" name="lastName" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Name" data-original-title="" title="">
                                     </div>
                                     @error('lastName')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                 </div>
                             </div>

                                <div class="form-group">
                                    <label for="accessoryTypeId">Company</label>

                                    <select id="companyId" name="companyId" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Accessory Type" data-original-title="" title="">
                                        <option value="">Select Company</option>
                                        @foreach($companies as $list)
                                            <option value="{{$list->id}}">{{$list->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('companyId')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="email">Email</label>
                                          <input type="email" id="email" class="form-control" placeholder="email" name="email" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="email" data-original-title="" title="">
                                      </div>
                                      @error('email')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror

                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="email">phone</label>
                                          <input type="number" id="phone" class="form-control" placeholder="email" name="phone" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="email" data-original-title="" title="">
                                      </div>
                                      @error('phone')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                  </div>
                              </div>




                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ eCommerce statistic -->

@stop

@section('top-js')
@stop

@section('theme-js')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('/ModernAdmin')}}/app-assets/vendors/js/material-vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('/ModernAdmin')}}/app-assets/vendors/js/charts/chartist.min.js"></script>
    <script src="{{asset('/ModernAdmin')}}/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{asset('/ModernAdmin')}}/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
    <script src="{{asset('/ModernAdmin')}}/app-assets/vendors/js/charts/raphael-min.js"></script>
    <script src="{{asset('/ModernAdmin')}}/app-assets/vendors/js/charts/morris.min.js"></script>
    <script src="{{asset('/ModernAdmin')}}/app-assets/vendors/js/timeline/horizontal-timeline.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('/ModernAdmin')}}/app-assets/js/core/app-menu.js"></script>
    <script src="{{asset('/ModernAdmin')}}/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('/ModernAdmin')}}/app-assets/js/scripts/pages/material-app.js"></script>
    <script src="{{asset('/ModernAdmin')}}/app-assets/js/scripts/tables/material-datatable.js"></script>
    <script src="{{asset('/ModernAdmin')}}/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->
@stop

@section('lower-js')
@stop
