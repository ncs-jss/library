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

                <div class="row">

                    <div class="col-sm-1"></div>

                    @include('sidenav')

                    <div class="col-xs-12 col-sm-8 col-sm-pull-2">
                      <div class="container-fluid">
                        <div class="row resources-content">

                            <div class="col-sm-7">

                            <h2>E-Resources</h2>

                            <h3>IEEE ALL-society Periodicals Package (ASPP)</h3>
                            <p>It provides access to the IEEE core collection of, electronics, and computer science engineering. Over 145 IEEE online society-sponsored journals, transactions and magazines are included in this package with back file access to 2000. These are most highly cited journals in the field concentrating on theoretical and experimental papers, practical applications in research, design and specification.</p>
                            <a href="#">IEEE Home</a>
                                <h3>ASCE</h3>
                                <p>The American Society of Civil Engineers (ASCE) is recognized globally for their significant contribution and dedication to the advancement of science and education in the civil engineering profession. The ASCE publishes 33 journals, periodicals and transactions that cover a comprehensive range of the civil engineering profession. ASCE journals are highly cited and are most relevant to the civil engineers for exchanging technical and professional knowledge. Information published in the journals of ASCE forms archival records not only of the technical advances of the ASCE but of the civil engineering profession as a whole.</p>
                            <a href="#">ASCE Home</a>


                            </div>


                            <div class="col-sm-5">

                                <h4>Online Video Lectures</h4>
                                <ul>

                                    <li><a href="">NPTEL Video lectures</a><p>(http://nptel.iitm.ac.in/)</p></li>
                                    <li><a href="">You Tube videos lectures on Engineering &amp Technology</a><p>(http://www.youtube.com/user/nptelhrd?gl=IN&hl=en-GB)
                                        </p></li>
                                    <li><a href="">Academic Earth</a><p>(http://www.academicearth.org/subjects/)</p></li>
                                    <li><a href="">IEEE Communications Society Conference tutorials (Free)</a><p>(http://www.comsoc.org/free-tutorials)</p></li>

                                </ul>

                                <h4>Digital Resources</h4>
                                <ul>

                                    <li><a href="">NPTEL Video lectures</a><p>(http://nptel.iitm.ac.in/)</p></li>
                                    <li><a href="">You Tube videos lectures on Engineering &amp Technology</a><p>(http://www.youtube.com/user/nptelhrd?gl=IN&hl=en-GB)
                                        </p></li>
                                    <li><a href="">Academic Earth</a><p>(http://www.academicearth.org/subjects/)</p></li>
                                    <li><a href="">IEEE Communications Society Conference tutorials (Free)</a><p>(http://www.comsoc.org/free-tutorials)</p></li>
                                    <li><a href="">IEEE Communications Society Conference tutorials (Free)</a><p>(http://www.comsoc.org/free-tutorials)</p></li>
                                    <li><a href="">IEEE Communications Society Conference tutorials (Free)</a><p>(http://www.comsoc.org/free-tutorials)</p></li>

                                </ul>

                                <h4>Digital Resources</h4>
                                <ul>

                                    <li><a href="">E-book Collection</a></li>



                                </ul>

                            </div>


                        </div>
                      </div>
                    </div>


                    <div class="col-sm-1"></div>


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
