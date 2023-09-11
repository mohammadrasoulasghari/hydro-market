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

    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed rtl">

        <div class="wrapper">
            {{-- <div id="loader"></div> --}}

            <x-panel-admin-header>

            </x-panel-admin-header>

            <x-admin-side-bar>

            </x-admin-side-bar>

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
                            <div class="col-lg-12 col-12">
                                <div class="box">

                                    <form action="{{ route('detail.store',$brand->id) }}" method="POST" class="form" enctype="multipart/form-data">
                                                   @csrf
                                                   <div class="box-body">
                 
                                            <h4 class="box-title text-info mb-0 mt-20"><i
                                                    class="ti-save me-15"></i>افزودن اطلاعات برای صفحه برند</h4>
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
                                                                 <input type="file" name="picture_url" class="form-control" placeholder="شرکت">
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
