<header class="main-header">
    <div class="d-flex align-items-center logo-box justify-content-start">
        <!-- Logo -->
        <a href="index-2.html" class="logo">
            <!-- logo-->
            <div class="logo-mini w-30">
                <span class="light-logo"><img src="{{ asset('images/logo-letter.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('images/logo-letter.png') }}" alt="logo"></span>
            </div>
            <div class="logo-lg">
                <span class="light-logo"><img src="{{ asset('images/logo-dark-text.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('images/logo-light-text.png') }}" alt="logo"></span>
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
                        <img src="{{ asset('images/svg-icon/collapse.svg') }}" class="img-fluid svg-icon" alt="">
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
                                                src="{{ asset('images/svg-icon/search.svg') }}" class="img-fluid svg-icon"
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
                        <img src="{{ asset('images/svg-icon/event.svg') }}" class="img-fluid svg-icon" alt="">
                    </a>
                </li>
                <li class="btn-group nav-item d-none d-xl-inline-block">
                    <a href="#"
                        class="waves-effect waves-light btn-outline no-border nav-link svg-bt-icon"
                        title="تسک بار">
                        <img src="{{ asset('images/svg-icon/correct.svg') }}" class="img-fluid svg-icon" alt="">
                    </a>
                </li>
            </ul>
        </div>

    
    </nav>
</header>