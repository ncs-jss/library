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

                    <div class=" col-xs-10 col-sm-8 col-sm-pull-2">

                        <div class="row " id="add-menu-item">

                            <h2 style="text-align:left">Edit Menu Item</h2>
                            <div class='container-fluid '>
                              <div class="row">
                                  
                                  <div class="col-xs-12 col-sm-6 ">
                                      <form action="new_menu" method="POST">
                                        <div class="form-group">
                                            <label class="sr-only">Menu Name:</label>
                                            <input type="text" class="form-control" id="" name="menu_name" value="{{ $menuname }}"  required ></input>
                                        </div>
                                        <div class="form-group">
                                          <label class="sr-only">Content:</label>
                                            <textarea name="content" placeholder="Editor" id="editor" rows="10" cols="80">{{ $content }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            @if($status == 0)
                                            <input type="radio" name="status" value="0" checked>Hide&nbsp&nbsp
                                            <input type="radio" name="status" value="1">&nbsp&nbspShow
                                            @else
                                            <input type="radio" name="status" value="0">Hide&nbsp&nbsp
                                            <input type="radio" name="status" value="1" checked>&nbsp&nbspShow
                                            @endif
                                        </div>
                                        <div style="color:green">{{ $err }}</div>
                                        <div style="color:red">
                                              @if($errors->has())
                                              @foreach ($errors->all() as $error)
                                              <div>{{ $error }}</div>
                                              @endforeach
                                              @endif
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        </div>
                                      </form>
                                  </div>

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

        <script>
            CKEDITOR.replace( 'editor', {
              uiColor: "#FFFFFF"
            });
        </script>
        
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
