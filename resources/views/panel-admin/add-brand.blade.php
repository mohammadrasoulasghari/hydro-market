<!DOCTYPE html>
<html lang="en">
<!-https: //t.me/sabzrea ->

    <!-- Mirrored from www.fudademo.ir/fudapanel/addproperty.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 13:28:34 GMT -->

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
                            <div class="col-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title">افزودن برند جدید</h4>
                                    
                                    </div>
                                    <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <input type="name" name="name" class="form-control" placeholder="نام برند">
                                                </div>
                                            </div>
                                
                                            <div class="col-sm-12">
                                                <div class="form-group mb-0">
                                                    <div class="form-line">
                                                        <input rows="4" name="picture_url" type="file" class="form-control no-resize" placeholder="آدرس عکس برند">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            <i class="ti-save-alt"></i> ذخیره
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        </div>
                    </section>
                   <p class="h3">لیست برند ها</p>
                    <section class="content">
                        <div class="row">
                            
                            <div class="col-xl-12 col-12">
                                @foreach ($brands as $brand)
                                <div class="box">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-12">
                                                <img class="img-thumbnail img-fluid" src="{{ asset('brand/' . $brand->picture_url) }}" alt="img">
                                            </div>
                                            <div class="col-lg-8 col-12">
                                                <div class="property-bx p-20">
                                                    <div>
                                                    
                                                        <h3 class="mt-0"><a href="#" class="text-primary">{{ $brand->name }}</a></h3>
                                                        
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
                        <!-https: //t.me/sabzrea ->
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

            <!-- Control Sidebar -->
            <aside class="control-sidebar">

                <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i
                            class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div><!-https:
                    //t.me/sabzrea ->
                    <!-- Create the tabs -->
                    <ul class="nav nav-tabs control-sidebar-tabs">
                        <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab"
                                class="active"><i class="mdi mdi-message-text"></i></a></li>
                        <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i
                                    class="mdi mdi-playlist-check"></i></a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- Home tab content -->
                        <div class="tab-pane active" id="control-sidebar-home-tab">
                            <div class="flexbox">
                                <a href="javascript:void(0)" class="text-grey">
                                    <i class="ti-more"></i>
                                </a>
                                <p>کاربران</p>
                                <a href="javascript:void(0)" class="text-end text-grey"><i
                                        class="ti-plus"></i></a><!-https: //t.me/sabzrea ->
                            </div>
                            <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                                <input type="text" name="s" placeholder="Search" class="w-p100">
                            </div>
                            <div class="media-list media-list-hover mt-20">
                                <div class="media py-10 px-0">
                                    <a class="avatar avatar-lg status-success" href="#">
                                        <img src="images/avatar/1.jpg" alt="...">
                                    </a>
                                    <div class="media-body">
                                        <p class="fs-16">
                                            <a class="hover-primary" href="#"><strong>سایه
                                                    رحیمی</strong></a><!-https: //t.me/sabzrea ->
                                        </p>
                                        <p>مدیریت تیکت ها را..</p>
                                        <span>همین الان</span>
                                    </div>
                                </div>

                                <div class="media py-10 px-0">
                                    <a class="avatar avatar-lg status-danger" href="#">
                                        <img src="images/avatar/2.jpg" alt="...">
                                    </a>
                                    <div class="media-body">
                                        <p class="fs-16">
                                            <a class="hover-primary" href="#"><strong>مختار مینائی</strong></a>
                                        </p>
                                        <p>کاربر جدید را تائید کرد</p>
                                        <span>۳۳ دقیقه پیش</span>
                                    </div>
                                </div>

                                <div class="media py-10 px-0">
                                    <a class="avatar avatar-lg status-warning" href="#">
                                        <img src="images/avatar/3.jpg" alt="...">
                                    </a>
                                    <div class="media-body">
                                        <p class="fs-16">
                                            <a class="hover-primary" href="#"><strong>لادن</strong></a>
                                        </p>
                                        <p>بروزرسانی ها را ..</p>
                                        <span>۴۳ دقیقه پیش</span>
                                    </div>
                                </div>

                                <div class="media py-10 px-0">
                                    <a class="avatar avatar-lg status-primary" href="#">
                                        <img src="images/avatar/4.jpg" alt="...">
                                    </a>
                                    <div class="media-body">
                                        <p class="fs-16">
                                            <a class="hover-primary" href="#"><strong>حامد</strong></a>
                                        </p>
                                        <p>دسته بندی ها را ویرایش کرد</p>
                                        <span>۴۳ دقیقه پیش</span>
                                    </div>
                                </div>

                                <div class="media py-10 px-0">
                                    <a class="avatar avatar-lg status-success" href="#">
                                        <img src="images/avatar/1.jpg" alt="...">
                                    </a>
                                    <div class="media-body">
                                        <p class="fs-16">
                                            <a class="hover-primary" href="#"><strong>سایه رحیمی </strong></a>
                                        </p>
                                        <p>تیکت جدید را بررسی کرد</p>
                                        <span>همین الان</span>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <!-- /.tab-pane -->
                        <!-- Settings tab content -->
                        <div class="tab-pane" id="control-sidebar-settings-tab">
                            <div class="flexbox">
                                <a href="javascript:void(0)" class="text-grey">
                                    <i class="ti-more"></i>
                                </a>
                                <p>لیست فعالیت ها</p>
                                <a href="javascript:void(0)" class="text-end text-grey"><i
                                        class="ti-plus"></i></a><!-https: //t.me/sabzrea ->
                            </div>
                            <ul class="todo-list mt-20">
                                <li class="py-15 px-5 by-1">
                                    <!-- checkbox -->
                                    <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                                    <label for="basic_checkbox_1" class="mb-0 h-15"></label>
                                    <!-- todo text -->
                                    <span class="text-line">فعالیت اول منقضی شد</span>
                                    <!-- Emphasis label -->
                                    <small class="badge bg-danger"><i class="fa fa-clock-o"></i> ۴ دقیقه
                                        پیش</small><!-https: //t.me/sabzrea ->
                                        <!-- General tools such as edit or delete-->
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                </li>
                                <li class="py-15 px-5">
                                    <!-- checkbox -->
                                    <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                                    <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                                    <span class="text-line">ایتم بررسی شد</span>
                                    <small class="badge bg-info"><i class="fa fa-clock-o"></i> ۳ دقیقه
                                        پیش</small><!-https: //t.me/sabzrea ->
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                </li>
                                <li class="py-15 px-5 by-1">
                                    <!-- checkbox -->
                                    <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                                    <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                                    <span class="text-line">خطا در تراکنش خرید</span>
                                    <small class="badge bg-warning"><i class="fa fa-clock-o"></i> ۱ روز پیش</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li class="py-15 px-5">
                                    <!-- checkbox -->
                                    <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                                    <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                                    <span class="text-line">ثبت با موفقیت انجام شد</span>
                                    <small class="badge bg-success"><i class="fa fa-clock-o"></i> ۳ روز
                                        پیش</small><!-https: //t.me/sabzrea ->
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                </li>
                                <li class="py-15 px-5 by-1">
                                    <!-- checkbox -->
                                    <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                                    <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                                    <span class="text-line">پشتیبانی کامل شد</span>
                                    <small class="badge bg-primary"><i class="fa fa-clock-o"></i> ۱ هفته
                                        پیش</small><!-https: //t.me/sabzrea ->
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                </li>
                                <li class="py-15 px-5">
                                    <!-- checkbox -->
                                    <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                                    <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                                    <span class="text-line">بررسی کامل</span>
                                    <small class="badge bg-info"><i class="fa fa-clock-o"></i> ۱ ماه
                                        پیش</small><!-https: //t.me/sabzrea ->
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                </li>


                                <li class="py-15 px-5 by-1">
                                    <!-- checkbox -->
                                    <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                                    <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                                    <span class="text-line">درخواست ناموفق</span>
                                    <small class="badge bg-warning"><i class="fa fa-clock-o"></i> ۱ روز پیش</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li class="py-15 px-5">
                                    <!-- checkbox -->
                                    <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                                    <label for="basic_checkbox_10" class="mb-0 h-15"></label>
                                    <span class="text-line">بررسی مدارک کامل شد</span>
                                    <small class="badge bg-success"><i class="fa fa-clock-o"></i> ۳ روز پیش</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>

        </div>
        <!-- ./wrapper -->


        <!-- Page Content overlay -->


        <!-- Vendor JS -->
        <script src="assets/js/vendors.min.js"></script>
        <script src="assets/js/pages/chat-popup.js"></script>
        <script src="assets/icons/feather-icons/feather.min.js"></script>


        <!-- Master Admin App -->
        <script src="assets/js/template.js"></script>
        <script src="assets/js/pages/dashboard.html"></script>

    </body>


    <!-- Mirrored from www.fudademo.ir/fudapanel/addproperty.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 13:28:34 GMT -->

</html>
