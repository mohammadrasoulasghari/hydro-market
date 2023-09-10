<!DOCTYPE html>
<html lang="en">
<!-https: //t.me/sabzrea ->

    <!-- Mirrored from www.fudademo.ir/fudapanel/general_form.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 13:28:52 GMT -->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/favicon.ico">

        <title>قالب ادمین - همه منظوره</title>

        <!-- Vendors Style-->
        <link rel="stylesheet" href="{{ asset('assets/css/vendors_css.css') }}">

        <!-- Style-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/skin_color.css') }}">

    </head>

    <body class="hold-transition light-skin sidebar-mini theme-primary fixed rtl">

        <div class="wrapper">
            {{-- <div id="loader"></div> --}}

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

            <aside class="main-sidebar">
                <!-- sidebar-->
                <section class="sidebar position-relative">
                    <div class="user-profile px-30 py-15">
                        <div class="text-center">
                            <div class="image">
                                <img src="images/avatar/1.jpg" class="avatar avatar-xxxl box-shadowed"
                                    alt="User Image">
                            </div>
                            <div class="info mt-20">
                                <a class="dropdown-toggle px-20" data-bs-toggle="dropdown" href="#">مختار
                                    مینائی</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="ti-user"></i>پروفایل</a>
                                    <a class="dropdown-item" href="#"><i class="ti-email"></i>صندوق ورودی</a>
                                    <a class="dropdown-item" href="#"><i class="ti-link"></i>ارتباطات</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="ti-settings"></i>تنظیمات</a>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline profile-setting mt-20 mb-0 d-flex justify-content-center">
                            <li class="pe-15"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"><i
                                        data-feather="search"></i></a></li>
                            <li class="pe-15"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"><i
                                        data-feather="bell"></i></a></li>
                            <li class="pe-15"><a href="#" data-bs-toggle="tooltip" data-bs-placement="top"><i
                                        data-feather="message-square"></i></a></li>
                            <li><a href="auth_login.html" data-bs-toggle="tooltip" data-bs-placement="top"><i
                                        data-feather="log-out"></i></a></li>
                        </ul>
                    </div>
                    <div class="multinav">
                        <div class="multinav-scroll" style="height: 100%;">
                            <!-- sidebar menu-->
                            <ul class="sidebar-menu" data-widget="tree">
                                <li class="header">منو</li>
                                <li>
                                    <a href="index-2.html">
                                        <i data-feather="compass"></i>
                                        <span>داشبورد</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="propertylist.html">
                                        <i data-feather="list"></i>
                                        <span>لیست املاک</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="propertygrid.html">
                                        <i data-feather="grid"></i>
                                        <span>املاک</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="addproperty.html">
                                        <i data-feather="award"></i>
                                        <span>ثبت ملک</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="propertydetails.html">
                                        <i data-feather="file-text"></i>
                                        <span>جزئیات ملک</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i data-feather="home"></i>
                                        <span>نوع ملک</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="apartment.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>آپارتمان</a></li>
                                        <li><a href="office.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>اداره</a></li>
                                        <li><a href="shop.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>خرید
                                                املاک</a></li>
                                        <li><a href="villa.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>ویلا</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="treeview">
                                    <a href="#">
                                        <i data-feather="grid"></i>
                                        <span>فروشگاه</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="store_index.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>داشبورد</a></li>
                                        <li><a href="product.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>محصولات</a></li>
                                        <li><a href="products_edit.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>ویرایش
                                                محصول</a></li>
                                        <li><a href="cart.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>سبد
                                                خرید</a></li>
                                        <li><a href="orders.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>سفارشات</a></li>
                                        <li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>صورتحساب</a></li>
                                        <li><a href="product_details.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>جزئیات
                                                محصول</a></li>
                                        <li><a href="invoice.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>فاکتور</a></li>
                                        <li><a href="expenses.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>هزینه
                                                ها</a></li>
                                    </ul>
                                </li>

                                <li class="treeview">
                                    <a href="#">
                                        <i data-feather="users"></i>
                                        <span>مشاوران</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="agentslist.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>همه
                                                مشاوران</a></li>
                                        <li><a href="addagent.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>عضویت
                                                مشاوران</a></li>
                                        <li><a href="agentprofile.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>پروفایل
                                                مشاوران</a></li>
                                    </ul>
                                </li>


                                <li class="treeview">

                                    <a href="#">
                                        <i data-feather="grid"></i>
                                        <span>فرم ها-جداول-نمودارها</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="basic_form.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i> دیت
                                                پیکر شمسی</a></li>
                                        <li><a href="forms_wizard.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i> فرم
                                                ویزارد</a></li>
                                        <li><a href="general_form.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>فرم
                                                کلی</a></li>
                                        <li><a href="form_mask.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>ماسک
                                                فرم</a></li>
                                        <li><a href="form_editors.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>ادیتور
                                                ها</a></li>
                                        <li><a href="charts-flot.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>فلت
                                                چارت</a></li>
                                        <li><a href="charts-chartjs.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>چارت
                                                js</a></li>
                                        <li><a href="charts-sparkline.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>اسپارک
                                                لاین</a></li>

                                        <li><a href="tables-datatable.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>دیتا
                                                تیبل</a></li>
                                        <li><a href="tables_simple.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>جداول
                                                ساده</a></li>
                                        <li><a href="tables_color.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>جداول
                                                رنگی</a></li>
                                    </ul>

                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i data-feather="users"></i>
                                        <span>رابط کاربری</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="box_advanced.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>باکس های
                                                پیشرفته</a></li>
                                        <li><a href="tabs.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>تب
                                                ها</a></li>
                                        <li><a href="buttons.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>دکمه
                                                ها</a></li>
                                        <li><a href="colors.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>رنگ
                                                ها</a></li>
                                        <li><a href="box_basic.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>باکس
                                                ساده</a></li>
                                        <li><a href="box_group.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>باکس
                                                گروهی</a></li>
                                        <li><a href="alerts.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>هشدار
                                                ها</a></li>
                                        <li><a href="cards.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>کارد
                                                ها</a></li>
                                        <li><a href="sliders.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span
                                                        class="path2"></span></i>اسلایدرها</a></li>
                                        <li><a href="s_icon.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>ایکون
                                                ساده</a></li>
                                        <li><a href="g_icon.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>گلیف
                                                ایکون</a></li>
                                        <li><a href="dropdown.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>دراپ
                                                دان</a></li>
                                    </ul>
                                </li>

                                <li class="treeview">
                                    <a href="#">
                                        <i data-feather="users"></i>
                                        <span>امکانات</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="modals.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>مدال
                                                ها</a></li>
                                        <li><a href="sweetaler.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>سوئیت
                                                الرت</a></li>
                                        <li><a href="box_basic.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>باکس
                                                ساده</a></li>
                                        <li><a href="box_group.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>باکس
                                                گروهی</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="reports.html">
                                        <i data-feather="pie-chart"></i>
                                        <span>گزارشات</span>
                                    </a>
                                </li>
                                <li class="header">اپلیکیشن ها</li>
                                <li>
                                    <a href="mailbox.html">
                                        <i data-feather="mail"></i>
                                        <span>صندوق ایمیل</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="file-manager.html">
                                        <i data-feather="file-plus"></i>
                                        <span>فایل منیجر</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        <i data-feather="phone-call"></i>
                                        <span>ارتباطات</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i data-feather="alert-triangle"></i>
                                        <span>احراز هویت</span>
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="auth_login.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>ورود</a>
                                        </li>
                                        <li><a href="auth_register.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>ثبت
                                                نام</a></li>
                                        <li><a href="auth_lockscreen.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>قفل
                                                صفحه</a></li>
                                        <li><a href="auth_user_pass.html"><i class="icon-Commit"><span
                                                        class="path1"></span><span class="path2"></span></i>بازیابی
                                                رمز عبور</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <div class="sidebar-widgets">
                                <div class="copyright text-start m-25">
                                    <p><strong class="d-block">قالب پنل مدیریت فوداتم</strong> © 2023 حق کپی رایت محفوظ
                                        است</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <div class="container-full">
                    <!-- Main content -->

                    <div class="content-header">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <h4 class="page-title">اجزای اصلی فرم ها</h4>
                                <div class="d-inline-block align-items-center">
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"><i
                                                        class="mdi mdi-home-outline"></i></a></li>
                                            <li class="breadcrumb-item" aria-current="page">فرم ها</li>
                                            <li class="breadcrumb-item active" aria-current="page">اجزای کلی فرم ها
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="box">

                                    <form action="{{ route('detail.store',$brand->id) }}" method="POST" class="form">
                                                   @csrf
                                                   <div class="box-body">
                 
                                            <h4 class="box-title text-info mb-0 mt-20"><i
                                                    class="ti-save me-15"></i>نیازمندی ها</h4>
                                            <hr class="my-15">
                                            <div class="form-group">
                                                <label class="form-label">نام شرکت</label>
                                                <input type="text" name="name" class="form-control" placeholder="شرکت">
                                            </div>
                                            <div class="row">
                                                   <div class="form-group">
                                                                    <label class="form-label">لینک هدایت</label>
                                                                    <input type="text" name="forward_url"  class="form-control" placeholder="شرکت">
                                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                                 <label class="form-label">لینک عکس</label>
                                                                 <input type="url" name="picture_url" class="form-control" placeholder="شرکت">
                                                             </div>
                                         </div>
                                            
                                            
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary" >
                                                <i class="ti-save-alt"></i> ذخیره
                                            </button>
                                            <button type="submit" class="btn btn-secoundry" onclick="duplicateForm()">
                                                   <i class="ti-save-alt"></i> افزودن
                                               </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box -->
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

            <!-- Control Sidebar -->
            <aside class="control-sidebar">

                <div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i
                            class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>
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
                            <a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
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
                                        <a class="hover-primary" href="#"><strong>سایه رحیمی</strong></a>
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
                 
                </div>
            </aside>
            <!-- /.control-sidebar -->

            <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>

        </div>
        </aside>
        <!-- ./wrapper -->

        
        <!-- Page Content overlay -->


        <!-- Vendor JS -->
        <script src="{{ asset('assets/js/vendors.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/chat-popup.js') }}"></script>
        <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>


        <!-- Master Admin App -->
        <script src="{{ asset('assets/js/template.js') }}"></script>
        <script src="{{ asset('assets/js/pages/dashboard.html') }}"></script>

    </body>
    <script>
         
         function duplicateForm() {
    const originalForm = document.querySelector('.form');
    const clone = originalForm.cloneNode(true);
    event.preventDefault()
    // پاک کردن مقادیر ورودی‌های کپی شده در فرم
    const inputs = clone.querySelectorAll('input[type="text"]');
    inputs.forEach(input => {
        input.value = '';
    });

    originalForm.parentNode.insertBefore(clone, originalForm.nextSibling);
    localStorage.setItem('formData', clone.innerHTML);
}
             </script>

    <!-- Mirrored from www.fudademo.ir/fudapanel/general_form.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 13:28:52 GMT -->

</html>
