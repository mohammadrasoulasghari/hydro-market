<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="user-profile px-30 py-15">
            <div class="text-center">
                <div class="image">
                    <img src="{{ asset('images/avatar/1.jpg') }}" class="avatar avatar-xxxl box-shadowed"
                        alt="User Image">
                </div>
                <div class="info mt-20">
                    <a class=" px-20" data-bs-toggle="dropdown" href="#">ادمین شرکت هیدرو مارکت</a>
                   
                </div>
                <div class="info mt-20">
                    <a class=" px-20"  href="#">وقتتون بخیر باشه</a>
                </div>
            </div>
            
        </div>
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">منو</li>
                    <li>
                        <a href="{{ route('panel.show') }}">
                            <i data-feather="compass"></i>
                            <span>مشاهده لیست برند ها </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('brands.create') }}">
                            <i data-feather="list"></i>
                            <span>افزودن برند جدید</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('delete.show') }}">
                            <i data-feather="list"></i>
                            <span>حذف برند </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('add.detail.page') }}">
                            <i data-feather="grid"></i>
                            <span>ویرایش اطلاعات صفحه هر برند</span>
                        </a>
                    </li>
                    <li>
                        <a href="addproperty.html">
                            <i data-feather="award"></i>
                            <span>ویرایش اطلاعات وبسایت</span>
                        </a>
                    </li>
                    <li>
                        <a href="propertydetails.html">
                            <i data-feather="file-text"></i>
                            <span>افزودن ادمین</span>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </section>
</aside>