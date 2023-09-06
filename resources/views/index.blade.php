<!doctype html>
<html lang="zxx">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="img/favicon.png" type="image/png">
       
        <!-- Bootstrap Min CSS -->
    @vite('resources/js/app.js')

        <title>Corpix – Creative Agency HTML Template</title>
    </head>

    <body data-spy="scroll" data-offset="70">
       
       <!--====== PRELOADER PART START ======-->

    

    <!--====== PRELOADER PART ENDS ======-->
    @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
       <x-navbar>
                 
       </x-navbar>

        <!-- Main Banner -->
        <div id="home" class="main-banner bg_cover" style="background-image: url(./img/slider-img.jpg);">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container_wrapper">
                        <div class="main-banner-content">
                            <h3>
                                <a href="#" class="typewrite" data-period="2000" data-type='["مرغوب", "کیفیت", "قدرت", "ضمانت" ]'>
                                    <span class="wrap"></span>
                                </a>
                            </h3>
                            <h1>هیدرو مارکت جایی که شما میتوانید مرغوب ترین<br> اجناس را تهیه کنید</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div id="particles-js"></div>
        </div>
        <!-- End Main Banner -->


        <!-- Features Area -->
        <div id="features" class="features-area">
            <div class="container">                
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="bdrop-section-title text-center pb-60">
                            <h6 class="sub-titler">انواع برند ها</h6>
                            <h3 class="main-title">یرند های بینظیر</h3>
                            <ul>
                                <li>بهترین کیفیت </li>
                                <li>مواد اولیه مرغوب</li>
                                <li>دارای ضمانت</li>
                            </ul>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- row -->

                 <x-brands :brands="$brands">

                 </x-brands>
            </div>
        </div>
        <!-- End Features Area -->

        
        @vite('resources/js/app.js')

    </body>
</html>