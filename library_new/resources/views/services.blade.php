<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    @include('header')
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <header>

            <div class="container-fluid">

                <div class="row">


                    <!-- nav bar starts -->
                    @include('navigation')
                    <!-- nav bar ends -->

                </div>


            </div>

        </header>


        <section class="e-resources">

            <div class="container-fluid">

                <div class="row content">
                  <!-- Side Space -->
                    <div class="col-sm-1"></div>
                    <!-- Side Navigation -->
                    
                            @include('sidenav')
                        
                    <!-- Service Column -->
                    <div class="col-xs-1 visible-xs"></div>

                    <div class=" col-xs-10 col-sm-8 col-sm-pull-2 ">

                        <div class="row resources-content" id="services">

                            <h2 >Services</h2>

                            <!-- SERVICE ROW 1 -->
                            <div class="row">
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_1.jpg') }}" alt="">
                                        <span class="service-text" id="serv_1">Book Borrowing Facility</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_2.jpg') }}" alt="">
                                        <span class="service-text" id="serv_2">Reference Service</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_3.jpg') }}" alt="">}}
                                        <span class="service-text" id="serv_3">Inter Library Loan</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_4.jpg') }}" alt="">
                                        <span class="service-text" id="serv_4">News Paper Clipping</span>
                                    </a>
                                </div>
                            </div>
                            <!-- SERVICE ROW 2 -->
                            <div class="row">
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_5.jpg') }}" alt="">
                                        <span class="service-text" id="serv_5">Internet Access Facility</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_6.jpg') }}" alt="">
                                        <span class="service-text" id="serv_6">User orientation</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_7.jpg') }}" alt="">
                                        <span class="service-text" id="serv_7">Reprography Service</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_8.jpg') }}" alt="">
                                        <span class="service-text" id="serv_8">Book Bank Facility</span>
                                    </a>
                                </div>
                            </div>
                            <!-- SERVICE ROW 3 -->
                            <div class="row">
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_9.jpg') }}" alt="">
                                        <span class="service-text" id="serv_9">Database Orientation</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_10.jpg') }}" alt="">
                                        <span class="service-text" id="serv_10">Government Book Bank Scheme Facility</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_11.jpg') }}" alt="">
                                        <span class="service-text" id="serv_11">Online Public Access Catalogue</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-3 service-item">
                                    <a href="#">
                                        <img class="img-responsive" src="{{ URL::asset('include/img/serv_12.jpg') }}" alt="">
                                        <span class="service-text" id="serv_12">Online Purchase Suggestions</span>
                                    </a>
                                </div>
                            </div>


                        </div>

                    </div>
                    <!-- Side Space -->
                    <div class="col-sm-1"></div>

                </div>

            </div>

        </section>

        <div class="filler">filler</div>



        <footer>
                <div class="container-fluid">

                    <div class="row copyright">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8"><p>Copyright &copy; <a href="#">Nibble Computer Society</a> . All Rights Reserved.</p></div>
                        <div class="col-sm-2"></div>

                    </div>
                </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="{{ URL::asset('js/vendor/jquery-1.11.1.min.js') }}"></script>
        <script>window.jQuery || document.write('<script src="{{ URL::asset('js/vendor/jquery-1.10.2.min.js') }}"><\/script>')</script>
        <script src="{{ URL::asset('js/bootstrap.js') }}"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
