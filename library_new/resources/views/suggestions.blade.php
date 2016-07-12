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
                    <div class="col-sm-1"></div>

                </div>


            </div>

        </header>




        <section class="e-resources">

            <div class="container-fluid">

                <div class="row content">

                    <div class="col-sm-1"></div>

                    @include('sidenav')

                    <div class="col-xs-12 col-sm-8 col-sm-pull-2">
                      <div class="container-fluid">
                        <div class="row resources-content" id="notices">

                            <h2>News and Events</h2>
                            <div class="col-sm-4 ">


                                <div class="form-group form-query">
                                    <label class="">Items per page</label>
                                    <select>
                                        <option value="25" selected>25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>


                                    </select>

                                </div>

                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-6 search">


                                <form class="navbar-form " role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-primary fa fa-search "></button>
                                </form>

                            </div>



                        </div>

                        <div class="row">

                            <table class="table table-striped table-row ">
                                <thead>
                                    <tr>
                                        <th>#</th>    
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Submitted By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suggestions as $suggestion)
                                    <tr>
                                        <th scope="row">{{ $id++ }}</th>
                                        <td><a href="">{{ $suggestion->title }}</a></td>
                                        <td>{{ $suggestion->author }}</td>
                                        <td>{{ $suggestion->username }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="row">

                                <nav>
                                    <ul class="pagination">
                                        <li><a href="#">first</a></li>
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>


                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                        <li><a href="#">last</a></li>
                                    </ul>
                                </nav>


                        </div>
                      </div>
                    </div>


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
