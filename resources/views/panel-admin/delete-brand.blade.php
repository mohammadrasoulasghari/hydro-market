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
        @if (session('alert'))
<div class="alert alert-danger">
    {{ session('alert') }}
</div>
@endif
        <div class="wrapper">
            <div id="loader"></div>
     
            <header class="main-header">
                <div class="d-flex align-items-center logo-box justify-content-start">
                    <!-- Logo -->
                    <a href="index-2.html" class="logo">
                        <!-- logo-->
                        <div class="logo-mini w-30">
                            <span class="light-logo"><img src="images/logo-letter.png" alt="logo"></span>
                            <span class="dark-logo"><img src="images/logo-letter.png" alt="logo"></span>
                        </div>
                        <div class="logo-lg">
                            <span class="light-logo"><img src="images/logo-dark-text.png" alt="logo"></span>
                            <span class="dark-logo"><img src="images/logo-light-text.png" alt="logo"></span>
                        </div>
                    </a>
                </div>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <div class="app-menu">
                        <ul class="header-megamenu nav">
                            <li class="btn-group nav-item">
                                <a href="#"
                                    class="waves-effect waves-light nav-link push-btn btn-outline no-border"
                                    data-toggle="push-menu" role="button">
                                    <img src="images/svg-icon/collapse.svg" class="img-fluid svg-icon" alt="">
                                </a>
                            </li>
                            <li class="btn-group d-lg-inline-flex d-none">
                                <div class="app-menu">
                                    <div class="search-bx mx-5">
                                        <form>
                                            <div class="input-group">
                                                <input type="search" class="form-control" placeholder="جستجو"
                                                    aria-label="Search" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn" type="submit" id="button-addon3"><img
                                                            src="images/svg-icon/search.svg" class="img-fluid svg-icon"
                                                            alt=""></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="btn-group nav-item d-none d-xl-inline-block">
                                <a href="#"
                                    class="waves-effect waves-light nav-link btn-outline no-border svg-bt-icon"
                                    title="چت">
                                    <img src="images/svg-icon/event.svg" class="img-fluid svg-icon" alt="">
                                </a>
                            </li>
                            <li class="btn-group nav-item d-none d-xl-inline-block">
                                <a href="#"
                                    class="waves-effect waves-light btn-outline no-border nav-link svg-bt-icon"
                                    title="تسک بار">
                                    <img src="images/svg-icon/correct.svg" class="img-fluid svg-icon" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="navbar-custom-menu r-side">
                        <ul class="nav navbar-nav">
                            <li class="btn-group nav-item d-lg-inline-flex d-none">
                                <a href="#" data-provide="fullscreen"
                                    class="waves-effect waves-light nav-link btn-outline no-border full-screen"
                                    title="تمام صفحه">
                                    <img src="images/svg-icon/fullscreen.svg" class="img-fluid svg-icon" alt="">
                                </a>
                            </li>


                            <!-- Notifications -->
                            <li class="dropdown notifications-menu">
                                <a href="#" class="waves-effect waves-light dropdown-toggle btn-outline no-border"
                                    data-bs-toggle="dropdown" title="اعلانات">
                                    <img src="images/svg-icon/notifications.svg" class="img-fluid svg-icon"
                                        alt="">
                                </a>
                                <ul class="dropdown-menu animated bounceIn">

                                    <li class="header">
                                        <div class="p-20">
                                            <div class="flexbox">
                                                <div>
                                                    <h4 class="mb-0 mt-0">اعلانات</h4>
                                                </div>
                                                <div>
                                                    <a href="#" class="text-danger">پاک کردن همه</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class="menu sm-scrol">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-info"></i> گروه جدید مشاوران تصمیمات
                                                    جدیدی را ...
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-warning"></i> خطایی در ثبت بوجود
                                                    امد...
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-danger"></i> بررسی کامل کارشناسان تائید
                                                    شد...
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-success"></i> ثبت سفارش جدید
                                                    اعلام شد
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-danger"></i> کارشناس جدید هنوز مدارک
                                                    خودرا ارسال نکرده است
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-primary"></i>تغییر سطح کاربری ادمین تیکت
                                                    ها
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">مشاهده همه</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- User Account-->
                            <li class="dropdown user user-menu">
                                <a href="#"
                                    class="waves-effect waves-light dropdown-toggle btn-outline no-border"
                                    data-bs-toggle="dropdown" title="کاربر">
                                    <img src="images/svg-icon/user.svg" class="img-fluid svg-icon" alt="">
                                </a>
                                <ul class="dropdown-menu animated flipInX">
                                    <li class="user-body">
                                        <a class="dropdown-item" href="#"><i
                                                class="ti-user text-muted me-2"></i> پروفایل</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ti-wallet text-muted me-2"></i> کیف پول</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="ti-settings text-muted me-2"></i> تنظیمات</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i
                                                class="ti-lock text-muted me-2"></i>خروج</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar" title="تنظیمات"
                                    class="waves-effect waves-light btn-outline no-border">
                                    <img src="images/svg-icon/settings.svg" class="img-fluid svg-icon"
                                        alt="">
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </header>
            <x-alert></x-alert>
            <x-admin-side-bar>

            </x-admin-side-bar>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container-full">
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-12">
                                <div class="box text-center">
                                    <div class="box-header">
                                        <h2 class="box-title">حذف برند</h2>
                                    </div>
                                </div>
                            </div>
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
                                                <img class="img-thumbnail img-fluid" src="{{ asset('brand/' . $brand->picture_url)}}"
                                                    alt="img">
                                            </div>
                                            <div class="col-lg-8 col-12">
                                                <div class="property-bx p-20">
                                                    <div>

                                                        <h3 class="mt-0"><a href="{{ route('brands.delete',$brand->id) }}"
                                                                class="text-primary">{{ $brand->name }}</a></h3>
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
                                            <img class="img-thumbnail img-fluid" src="images/property/p1.jpg"
                                                alt="img">
                                        </div>
                                        <div class="col-lg-8 col-12">
                                            <div class="property-bx p-20">
                                                <div>

                                                    <h3 class="mt-0"><a href="#"
                                                            class="text-primary">تهران</a></h3>

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
                <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
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
                    <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i
                                class="mdi mdi-message-text"></i></a></li>
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
