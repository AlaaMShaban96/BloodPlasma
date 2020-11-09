@php
  App::setLocale(	Session::get('applocale'));
//   $x=Session::get('applocale');
@endphp
@extends('layout.master')

@section('content')
    

    <div class="container-fluid gtco-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {{-- {{__('index.our_partners')}} --}}
                    <h1> {{__('index/index.start')}}</h1>
                    <a href="#contact">{{__('index/index.Contact_Us')}} <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                <div class="col-md-6">
                    <div class="card"><img class="card-img-top img-fluid" src="images/banner-img.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-feature" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="cover">
                        <div class="card">
                            <svg
                                    class="back-bg"
                                    width="100%" viewBox="0 0 900 700" style="position:absolute; z-index: -1">
                                <defs>
                                    <linearGradient id="PSgrad_01" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                        <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                        <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                                    </linearGradient>
                                </defs>
                                <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_01)"
                                    d="M616.656,2.494 L89.351,98.948 C19.867,111.658 -16.508,176.639 7.408,240.130 L122.755,546.348 C141.761,596.806 203.597,623.407 259.843,609.597 L697.535,502.126 C748.221,489.680 783.967,441.432 777.751,392.742 L739.837,95.775 C732.096,35.145 677.715,-8.675 616.656,2.494 Z"/>
                            </svg>
                            <!-- *************-->

                            <svg width="100%" viewBox="0 0 700 500">
                                <clipPath id="clip-path">
                                    <path d="M89.479,0.180 L512.635,25.932 C568.395,29.326 603.115,76.927 590.357,129.078 L528.827,380.603 C518.688,422.048 472.661,448.814 427.190,443.300 L73.350,400.391 C32.374,395.422 -0.267,360.907 -0.002,322.064 L1.609,85.154 C1.938,36.786 40.481,-2.801 89.479,0.180 Z"></path>
                                </clipPath>
                                <!-- xlink:href for modern browsers, src for IE8- -->
                                <image clip-path="url(#clip-path)" xlink:href="images/learn-img.svg" width="100%"
                                    height="465" class="svg__image"></image>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2>{{__('index/index.how_nano')}} </h2>
                    <p> {{__('index/index.how_nano_part_1')}} </p>
                    <p>
                        <small>{{__('index/index.how_nano_part_2')}} </small>
                    </p>
                    {{-- <a href="#">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-features" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2> {{__('index/index.explore')}}</h2>
                    <p> {{__('index/index.explore_details')}} </p>
                    {{-- <a href="#">All Services <i class="fa fa-angle-right" aria-hidden="true"></i></a> --}}
                </div>
                <div class="col-lg-8">
                    <svg id="bg-services"
                        width="100%"
                        viewBox="0 0 1000 800">
                        <defs>
                            <linearGradient id="PSgrad_02" x1="64.279%" x2="0%" y1="76.604%" y2="0%">
                                <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1"/>
                                <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1"/>
                            </linearGradient>
                        </defs>
                        <path fill-rule="evenodd" opacity="0.102" fill="url(#PSgrad_02)"
                            d="M801.878,3.146 L116.381,128.537 C26.052,145.060 -21.235,229.535 9.856,312.073 L159.806,710.157 C184.515,775.753 264.901,810.334 338.020,792.380 L907.021,652.668 C972.912,636.489 1019.383,573.766 1011.301,510.470 L962.013,124.412 C951.950,45.594 881.254,-11.373 801.878,3.146 Z"/>
                    </svg>
                    <div class="row">
                        <div class="col">
                        
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="images/cctv.svg" alt=""></div>
                                <div class="card-body">
                                    <h3 class="card-title">CCTV</h3>
                                    {{-- <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                        eget.</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="images/web-design.png" alt=""></div>
                                <div class="card-body">
                                    <h3 class="card-title">Web developer</h3>
                                    {{-- <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                        eget.</p> --}}
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="images/marketing.png" alt=""></div>
                                <div class="card-body">
                                    <h3 class="card-title">Marketing</h3>
                                    {{-- <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                        eget.</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="images/seo.png" alt=""></div>
                                <div class="card-body">
                                    <h3 class="card-title">SEO</h3>
                                    {{-- <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                        eget.</p> --}}
                                </div>
                            </div>
                            <div class="card text-center">
                                <div class="oval"><img class="card-img-top" src="images/graphics-design.png" alt=""></div>
                                <div class="card-body">
                                    <h3 class="card-title">Graphics Design</h3>
                                    {{-- <p class="card-text">Nullam quis libero in lorem accumsan sodales. Nam vel nisi
                                        eget.</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container-fluid gtco-numbers-block">
        <div class="container">
            <svg width="100%" viewBox="0 0 1600 400">
                <defs>
                    <linearGradient id="PSgrad_03" x1="80.279%" x2="0%"  y2="0%">
                        <stop offset="0%" stop-color="rgb(1,230,248)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(29,62,222)" stop-opacity="1" />

                    </linearGradient>

                </defs>
                <!-- <clipPath id="clip-path3">

                                        </clipPath> -->

                <path fill-rule="evenodd"  fill="url(#PSgrad_03)"
                    d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>

                <clipPath id="ctm" fill="none">
                    <path
                            d="M98.891,386.002 L1527.942,380.805 C1581.806,380.610 1599.093,335.367 1570.005,284.353 L1480.254,126.948 C1458.704,89.153 1408.314,59.820 1366.025,57.550 L298.504,0.261 C238.784,-2.944 166.619,25.419 138.312,70.265 L16.944,262.546 C-24.214,327.750 12.103,386.317 98.891,386.002 Z"></path>
                </clipPath>

                <!-- xlink:href for modern browsers, src for IE8- -->
                <image  clip-path="url(#ctm)" xlink:href="images/word-map.png" height="800px" width="100%" class="svg__image">

                </image>

            </svg>
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">125</h5>
                            <p class="card-text">Active Projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">200</h5>
                            <p class="card-text">Business Growth</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">530</h5>
                            <p class="card-text">Completed Projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">941</h5>
                            <p class="card-text">Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid gtco-testimonials">
        <div class="container">
            <h2>{{__('index/index.our_team')}}</h2>
            <div class="owl-carousel owl-carousel1 owl-theme">
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/team/alaa.jpg" alt="">
                        <div class="card-body">
                            <h5>Alaa Mohammed<br/>
                                <span> Back End developer </span></h5>
                            <p class="card-text">
                                <a href="https://web.facebook.com/weldtribole/">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="48" height="48"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="35.80825" y1="35.80825" x2="145.53708" y2="145.53708" gradientUnits="userSpaceOnUse" id="color-1_uLWV5A9vXIPu_gr1"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667z" fill="url(#color-1_uLWV5A9vXIPu_gr1)"></path><path d="M95.70008,104.99525h18.54733l2.91325,-18.84117h-21.46058v-10.2985c0,-7.826 2.5585,-14.76692 9.87925,-14.76692h11.76408v-16.44033c-2.06758,-0.2795 -6.43925,-0.88867 -14.69883,-0.88867c-17.25017,0 -27.36233,9.10883 -27.36233,29.8635v12.5345h-17.73392v18.84117h17.73033v51.78633c3.51167,0.52317 7.06992,0.8815 10.72133,0.8815c3.30025,0 6.52167,-0.301 9.70008,-0.731z" fill="#ffffff"></path></g></g></svg>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/team/maliek.jpg" alt="">
                        <div class="card-body">
                            <h5>Malek Awedan<br/>
                                <span> Front End developer </span></h5>
                                <p class="card-text">
                                    <a href="https://web.facebook.com/malek.aweden1/"  >
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="48" height="48"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><defs><linearGradient x1="35.80825" y1="35.80825" x2="145.53708" y2="145.53708" gradientUnits="userSpaceOnUse" id="color-1_uLWV5A9vXIPu_gr1"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667z" fill="url(#color-1_uLWV5A9vXIPu_gr1)"></path><path d="M95.70008,104.99525h18.54733l2.91325,-18.84117h-21.46058v-10.2985c0,-7.826 2.5585,-14.76692 9.87925,-14.76692h11.76408v-16.44033c-2.06758,-0.2795 -6.43925,-0.88867 -14.69883,-0.88867c-17.25017,0 -27.36233,9.10883 -27.36233,29.8635v12.5345h-17.73392v18.84117h17.73033v51.78633c3.51167,0.52317 7.06992,0.8815 10.72133,0.8815c3.30025,0 6.52167,-0.301 9.70008,-0.731z" fill="#ffffff"></path></g></g></svg>
                                </a>
                                </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/team/walied.jpg" alt="">
                        <div class="card-body">
                            <h5>Walid Fahig<br/>
                                <span> Back End developer </span></h5>
                            <p class="card-text">
                                <a href="https://web.facebook.com/WalidFahig/">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="48" height="48"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="35.80825" y1="35.80825" x2="145.53708" y2="145.53708" gradientUnits="userSpaceOnUse" id="color-1_uLWV5A9vXIPu_gr1"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667z" fill="url(#color-1_uLWV5A9vXIPu_gr1)"></path><path d="M95.70008,104.99525h18.54733l2.91325,-18.84117h-21.46058v-10.2985c0,-7.826 2.5585,-14.76692 9.87925,-14.76692h11.76408v-16.44033c-2.06758,-0.2795 -6.43925,-0.88867 -14.69883,-0.88867c-17.25017,0 -27.36233,9.10883 -27.36233,29.8635v12.5345h-17.73392v18.84117h17.73033v51.78633c3.51167,0.52317 7.06992,0.8815 10.72133,0.8815c3.30025,0 6.52167,-0.301 9.70008,-0.731z" fill="#ffffff"></path></g></g></svg>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/team/mohammed_alyacoubi.jpg" alt="">
                        <div class="card-body">
                            <h5>Mohammed Alyacoubi<br/>
                                <span> Mobile developer </span></h5>
                            <p class="card-text">
                                <a href="https://web.facebook.com/profile.php?id=100006942280938">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="48" height="48"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><defs><linearGradient x1="35.80825" y1="35.80825" x2="145.53708" y2="145.53708" gradientUnits="userSpaceOnUse" id="color-1_uLWV5A9vXIPu_gr1"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667z" fill="url(#color-1_uLWV5A9vXIPu_gr1)"></path><path d="M95.70008,104.99525h18.54733l2.91325,-18.84117h-21.46058v-10.2985c0,-7.826 2.5585,-14.76692 9.87925,-14.76692h11.76408v-16.44033c-2.06758,-0.2795 -6.43925,-0.88867 -14.69883,-0.88867c-17.25017,0 -27.36233,9.10883 -27.36233,29.8635v12.5345h-17.73392v18.84117h17.73033v51.78633c3.51167,0.52317 7.06992,0.8815 10.72133,0.8815c3.30025,0 6.52167,-0.301 9.70008,-0.731z" fill="#ffffff"></path></g></g></svg>
                                </a>
                            </p> 
              
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/team/Mohammad_Abourgibah.jpg" alt="">
                        <div class="card-body">
                            <h5>Mohammad Abourgibah<br/>
                                <span> Social Media </span></h5>
                                <p class="card-text">

                                    <a href="https://web.facebook.com/mohammed98ab/">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="48" height="48"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><defs><linearGradient x1="35.80825" y1="35.80825" x2="145.53708" y2="145.53708" gradientUnits="userSpaceOnUse" id="color-1_uLWV5A9vXIPu_gr1"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667z" fill="url(#color-1_uLWV5A9vXIPu_gr1)"></path><path d="M95.70008,104.99525h18.54733l2.91325,-18.84117h-21.46058v-10.2985c0,-7.826 2.5585,-14.76692 9.87925,-14.76692h11.76408v-16.44033c-2.06758,-0.2795 -6.43925,-0.88867 -14.69883,-0.88867c-17.25017,0 -27.36233,9.10883 -27.36233,29.8635v12.5345h-17.73392v18.84117h17.73033v51.78633c3.51167,0.52317 7.06992,0.8815 10.72133,0.8815c3.30025,0 6.52167,-0.301 9.70008,-0.731z" fill="#ffffff"></path></g></g></svg>
                                    </a>
  
                                </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/team/algatas.jpg" alt="">
                        <div class="card-body">
                            <h5>Mohammed Alghattas<br/>
                                <span> IT Support</span></h5>
                                
                                <p class="card-text">

                                <a href="https://web.facebook.com/medoo.aght/">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="48" height="48"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><defs><linearGradient x1="35.80825" y1="35.80825" x2="145.53708" y2="145.53708" gradientUnits="userSpaceOnUse" id="color-1_uLWV5A9vXIPu_gr1"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667z" fill="url(#color-1_uLWV5A9vXIPu_gr1)"></path><path d="M95.70008,104.99525h18.54733l2.91325,-18.84117h-21.46058v-10.2985c0,-7.826 2.5585,-14.76692 9.87925,-14.76692h11.76408v-16.44033c-2.06758,-0.2795 -6.43925,-0.88867 -14.69883,-0.88867c-17.25017,0 -27.36233,9.10883 -27.36233,29.8635v12.5345h-17.73392v18.84117h17.73033v51.78633c3.51167,0.52317 7.06992,0.8815 10.72133,0.8815c3.30025,0 6.52167,-0.301 9.70008,-0.731z" fill="#ffffff"></path></g></g></svg>
                                </a>

                                </p>
                            
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/team/Bashir_Abumhara.jpg" alt="">
                        <div class="card-body">
                            <h5>Bashir Abumhara<br/>
                                <span> Designer</span></h5>
                                <p class="card-text">
                                    <a href="https://web.facebook.com/bashir.mhara/">

                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="48" height="48"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><defs><linearGradient x1="35.80825" y1="35.80825" x2="145.53708" y2="145.53708" gradientUnits="userSpaceOnUse" id="color-1_uLWV5A9vXIPu_gr1"><stop offset="0" stop-color="#2aa4f4"></stop><stop offset="1" stop-color="#007ad9"></stop></linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g><path d="M86,14.33333c-39.5815,0 -71.66667,32.08517 -71.66667,71.66667c0,39.5815 32.08517,71.66667 71.66667,71.66667c39.5815,0 71.66667,-32.08517 71.66667,-71.66667c0,-39.5815 -32.08517,-71.66667 -71.66667,-71.66667z" fill="url(#color-1_uLWV5A9vXIPu_gr1)"></path><path d="M95.70008,104.99525h18.54733l2.91325,-18.84117h-21.46058v-10.2985c0,-7.826 2.5585,-14.76692 9.87925,-14.76692h11.76408v-16.44033c-2.06758,-0.2795 -6.43925,-0.88867 -14.69883,-0.88867c-17.25017,0 -27.36233,9.10883 -27.36233,29.8635v12.5345h-17.73392v18.84117h17.73033v51.78633c3.51167,0.52317 7.06992,0.8815 10.72133,0.8815c3.30025,0 6.52167,-0.301 9.70008,-0.731z" fill="#ffffff"></path></g></g></svg>
                               </a>
                             </p>
                                
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-features-list">
        <div class="container">
            <div class="row">
                <div class="media col-md-6 col-lg-4">
                    <div class="oval mr-4"><img class="align-self-start" src="images/quality-results.png" alt=""></div>
                    <div class="media-body">
                        <h5 class="mb-0">{{__('index/index.quality_results')}}</h5>
                        {{__('index/index.quality_results_details')}}
                    </div>
                </div>
                <div class="media col-md-6 col-lg-4">
                    <div class="oval mr-4"><img class="align-self-start" src="images/analytics.png" alt=""></div>
                    <div class="media-body">
                        <h5 class="mb-0">{{__('index/index.analytics')}}</h5>
                        {{__('index/index.analytics_details')}}
                    </div>
                </div>
                <div class="media col-md-6 col-lg-4">
                    <div class="oval mr-4"><img class="align-self-start" src="images/affordable-pricing.png" alt=""></div>
                    <div class="media-body">
                        <h5 class="mb-0">{{__('index/index.affordable_pricing')}}</h5>
                        {{__('index/index.affordable_pricing_details')}}
                    </div>
                </div>
                <div class="media col-md-6 col-lg-4">
                    <div class="oval mr-4"><img class="align-self-start" src="images/easy-to-use.png" alt=""></div>
                    <div class="media-body">
                        <h5 class="mb-0"> {{__('index/index.easy_to_use')}}</h5>
                        {{__('index/index.easy_to_use_details')}}
                    </div>
                </div>
                <div class="media col-md-6 col-lg-4">
                    <div class="oval mr-4"><img class="align-self-start" src="images/free-support.png" alt=""></div>
                    <div class="media-body">
                        <h5 class="mb-0">{{__('index/index.free_support')}}</h5>
                        {{__('index/index.free_support_details')}}
                    </div>
                </div>
                <div class="media col-md-6 col-lg-4">
                    <div class="oval mr-4"><img class="align-self-start" src="images/effectively-increase.png" alt=""></div>
                    <div class="media-body">
                        <h5 class="mb-0">{{__('index/index.effectively_increase')}}</h5>
                        {{__('index/index.effectively_increase_details')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid gtco-logo-area">
        <div class="container">
            {{-- <div class="row">
                <div class="col"><img src="images/logo1.png" class="img-fluid" alt=""></div>
                <div class="col"><img src="images/logo2.png" class="img-fluid" alt=""></div>
                <div class="col"><img src="images/logo3.png" class="img-fluid" alt=""></div>
                <div class="col"><img src="images/logo4.png" class="img-fluid" alt=""></div>
                <div class="col"><img src="images/logo5.png" class="img-fluid" alt=""></div>
            </div> --}}
        </div>
    </div>
    {{-- <div class="container-fluid gtco-news" id="news">
        <div class="container">
            <h2>Latest News & Articles</h2>
            <div class="owl-carousel owl-carousel2 owl-theme">
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/news1.jpg" alt="">
                        <div class="card-body text-left pr-0 pl-0">
                            <h5>Aenean ultrices lorem quis blandit
                                tempor urabitur accumsan. </h5>
                            <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                                et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                                . . . </p>
                            <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/news2.jpg" alt="">
                        <div class="card-body text-left pr-0 pl-0">
                            <h5> Nam vel nisi eget odio pulvinar
                                iaculis. Fusce aliquet. </h5>
                            <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                                et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                                . . . </p>
                            <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/news3.jpg" alt="">
                        <div class="card-body text-left pr-0 pl-0">
                            <h5>Morbi faucibus odio sollicitudin
                                risus scelerisque dignissim. </h5>
                            <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                                et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                                . . . </p>
                            <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/news1.jpg" alt="">
                        <div class="card-body text-left pr-0 pl-0">
                            <h5>Aenean ultrices lorem quis blandit
                                tempor urabitur accumsan. </h5>
                            <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                                et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                                . . . </p>
                            <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/news2.jpg" alt="">
                        <div class="card-body text-left pr-0 pl-0">
                            <h5> Nam vel nisi eget odio pulvinar
                                iaculis. Fusce aliquet. </h5>
                            <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                                et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                                . . . </p>
                            <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div>
                    <div class="card text-center"><img class="card-img-top" src="images/news3.jpg" alt="">
                        <div class="card-body text-left pr-0 pl-0">
                            <h5>Morbi faucibus odio sollicitudin
                                risus scelerisque dignissim. </h5>
                            <p class="card-text">Donec non sem mi. In hac habitasse platea dictumst. Nullam a feugiat augue,
                                et porta metus. Nulla mollis lobortis leet. Maecenas tincidunt, arcu sed ornare purus risus
                                . . . </p>
                            <a href="#">READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
@endsection