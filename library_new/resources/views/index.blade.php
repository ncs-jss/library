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

        <section class="tagline">

            <div class="container-fluid">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 ">
                    <div class="row headlines">

                        <h1>Welcome to JSS Academy of Technical Education Library</h1>
                        <h2>A place for self learning</h2>

                    </div>
                </div>
                <div class="col-sm-1"></div>

            </div>

        </section>

        <section>

            <div class="container-fluid">

                <div class="row content">

                    <div class="col-sm-1"></div>

                    @include('sidenav')

                    <!-- carousel starts -->
                    <div class="col-xs-12 col-sm-8 col-sm-pull-2">

                        <div class="row carousel-row">


                            <div id="carousel-gallery" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators" id="carousel-indicators-gallery">
                                    <li data-target="#carousel-gallery" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-gallery" data-slide-to="1"></li>
                                    <li data-target="#carousel-gallery" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner review" role="listbox" id="gallery-thumbnail">
                                    <div class="item active">
                                        <img src="{{ URL::asset('img/1.jpg') }}" class="img-responsive">

                                    </div>
                                    <div class="item">
                                        <img src="{{ URL::asset('img/2.jpg') }}" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="{{ URL::asset('img/3.jpg') }}" class="img-responsive">
                                    </div>


                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-gallery" role="button" data-slide="prev">
                                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-gallery" role="button" data-slide="next">
                                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>

                        </div>

                        <!-- carousel ends -->

                        <div class="row about-content">

                            <p>The JSS Academy of Technical Education Library is established in the year 1998 to support the educational and research programs of the institute by providing physical and intellectual access to information in the field of Engineering and allied subjects. The library is aims to develop a comprehensive collection of documents useful for the faculty, students and research community of the institute. The Library and information Center fully automated and spread over 1260 sq. m. in air conditioned halls. It has a seating capacity of over 350 students in the Reference section. The Library has good collection of books, journals, reports, dissertations. Library is subscribing around 142 international and national journals/magazines. In addition, it has nine online full text databases of <strong>IEEE, ASME, ASCE, ASTM Digital Library, Science Direct, McGraw-Hill Access engineering Library, Springer, J-Gate (engineering Technology &amp; Management) and EBSCO</strong> which contains More than 5000+ International e-journals and 350 e-books are provided for the benefit of the faculty and research community.<br>

                                The library offers services such as reference service, Referral Service, User guidaness service, Inter Library loan, document delivery service, Weekly display of periodicals and books, photocopy service, and Email alert service. Current awareness service is provided comprising regular display of photocopy copies of articles published by the institute faculty and students.<br>

                                Library is using the NETLIB an integrated Library Management software package with all the modules for the library housekeeping operations. The online public access catalogue has more than 1.2 lakh records of books. Using OPAC, user can search the books by Author, Title, Subject and keywords. Also the users can know the latest editions of periodicals, books and the status of the document. Library is a member of DELNET, NISCAIR and INDEST. Besides all this, we have developed an independent library website wherein 5007 e-Books and 193 e-Journals are made available online to the user community.</p>

                        </div>

                    </div>

                    <div class="col-sm-1"></div>




                </div>

            </div>

        </section>


        <section>

            <div class="container-fluid">

                <div class="row thumbnails">

                    <div class="col-sm-3">
                        <div class="row">
                            <h2><span class="fa fa-institution"></span></h2>
                        <h1>Library Objective</h1>
                        <hr class="thumbnail">
                        <p>The library houses an enviable collection of resources in the field of Engineering, Management and allied subjects. The library strives to fulfill the information requirements of students and faculty of the Institution. The fully- automated library serves as a nucleus of information in every branch of Engineering Science with the objectives. To serve as a central node for scholastic information in every branch of Engineering and Management. To build a comprehensive collection of resources in the field of Engineering, Management and allied areas.</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row text-center">
                            <h2><span class="fa fa-bar-chart"></span></h2>
                        <h1>Library Collection</h1>
                        <hr class="thumbnail">
                        <p>There is a wide collection of books in the library.The general section along with the Book Bank contains enough no of books.</p>
                        <a href="#"><button class="btn btn-primary">View</button></a>

                        </div>
                    </div>
                    <div class="col-sm-3">

                        <div class="row text-center">
                            <h2><span class="fa fa-list"></span></h2>
                        <h1>Rules and Regulations</h1>
                        <hr class="thumbnail">
                        <p>Rules to be followed in library.<br>
                            1. I- cards are mandatory to gain entry to the library.<br>
                            2. I- cards are not transferable.<br>
                            3. All students are advised to bring their own I- cards while using the library.<br>

                            4. Loss of I cards should be reported immediately. The Library takes no responsibility if any book was issued on the lost card.
                            </p>
                        <a href="#"><button class="btn btn-primary">View All</button></a>
                        </div>

                    </div>
                    <div class="col-sm-3">

                        <div class="row text-center">
                            <h2><span class="fa fa-clock-o"></span></h2>
                        <h1>Library Timings</h1>
                        <hr class="thumbnail">
                        <p>Get the timing for different sections of library.</p>
                        <a href="#"><button class="btn btn-primary">View</button></a>
                        </div>
                    </div>

                </div>

            </div>

        </section>



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
