<!DOCTYPE html>
<html lang="en">
<!-https: //t.me/sabzrea ->

    <!-- Mirrored from www.fudademo.ir/fudapanel/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 13:27:54 GMT -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/favicon.ico">

        <title>قالب ادمین - همه منظوره</title>

        <!-- Vendors Style-->
        <link rel="stylesheet" href="assets/css/vendors_css.css">

        <!-- Style-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/skin_color.css">

    </head>

    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed rtl">
  <x-alert></x-alert>
        <div class="wrapper">
            <div id="loader"></div>

            <x-panel-admin-header>

            </x-panel-admin-header>

            <x-admin-side-bar>

            </x-admin-side-bar>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container-full">
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            
                            <div class="col-xl-12 col-12">
                                @foreach ($brands as $brand)
                                <div class="box">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-12">
                                                <img class="img-thumbnail img-fluid" src="{{ asset('brand/' . $brand->picture_url)}}" alt="img">
                                            </div>
                                            <div class="col-lg-8 col-12">
                                                <div class="property-bx p-20">
                                                    <div>
                                                    
                                                        <h3 class="mt-0"><a href="{{ route('add.detail',$brand->id) }}" class="text-primary">{{ $brand->name }}</a></h3>
                                                        
                                                    </div>
                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                @endforeach
                                <div class="box">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-12">
                                                <img class="img-thumbnail img-fluid" src="images/property/p1.jpg" alt="img">
                                            </div>
                                            <div class="col-lg-8 col-12">
                                                <div class="property-bx p-20">
                                                    <div>
                                                    
                                                        <h3 class="mt-0"><a href="#" class="text-primary">تهران</a></h3>
                                                        
                                                    </div>
                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
    
    
                    <!-- /.content -->
                </div>
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right d-none d-sm-inline-block">
                    <ul
                        class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                       
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">پرسش ها</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">اپدیت جدید</a>
                            </li>
                    </ul>
                </div>
                &copy; 2023 <a href="https://fudatco.com/">قالب های چند منظوره</a>. کپی رایت محفوظ است.
            </footer>



            <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>

        </div>
        <!-- ./wrapper -->




        <!-- Page Content overlay -->


        <!-- Vendor JS -->
        <script src="assets/js/vendors.min.js"></script>
        <script src="assets/js/pages/chat-popup.js"></script>
        <script src="assets/icons/feather-icons/feather.min.js"></script><!-https: //t.me/sabzrea ->
        <script src="assets/js/charts/sparkline.js"></script>
            <script src="assets/js/charts/jquery.sparkline.min.js"></script>

            <!-- Master Admin App -->
            <script src="assets/js/template.js"></script>
            <script src="assets/js/charts/apexcharts.min.js"></script>
            <script src="assets/js/charts/apexcharts-light-rtl.js"></script><!-https: //t.me/sabzrea ->
                <script src="assets/js/charts/app.js"></script>

    </body>


    <!-- Mirrored from www.fudademo.ir/fudapanel/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 13:28:14 GMT -->

</html>
