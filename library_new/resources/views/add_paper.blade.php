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

                    <div class="col-sm-1"></div>

                        <!-- Side Navigation -->
                          @include('sidenav')
                        
                    <div class="col-xs-12 col-sm-8 col-sm-pull-2">

                        <div class="row resources-content" id="services">



                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <h2>Add Question Papers</h2>
                                <form action="add_paper" method="POST" enctype="multipart/form-data"> 
                                    <div class="form-group">
                                        <label class="sr-only">Subject:</label>
                                        <input type="text" class="form-control" id="" name="subject" placeholder="Subject *" required>
                                    </div>
                                    <div class="form-group">
                                        <label class=" sr-only">Year of Examination:</label>
                                        <input type="number" class="form-control" id="" name="year" placeholder="Paper Year *" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Semester:</label>
                                    <input type="number" class="form-control" id="" name="semester" placeholder="Semester *" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="file" class="col-md-4 control-label">Question Paper:</label>
                                            <div class="col-md-6 col-md-offset-2">
                                                <input type="file" name="file" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div style="color:red">{{ $err }}</div>
                                    <div style="color:red">
                                    @if($errors->has())
                                    @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                    @endforeach
                                    @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Paper</button>
                                    
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>

                            </div>
                            <div class="col-sm-3"></div>



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
