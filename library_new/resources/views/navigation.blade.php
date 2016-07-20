<div class="col-sm-1"></div>
                    <div class="col-sm-10">


                        <nav class="navbar navbar-default ">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">
                                        <img class="img-responsive" src="{{URL::asset('img/logo.png')}}" width="100px"><p>Library</p>
                                    </a>

                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><a href="{{route('resources')}}">E-Resources</a></li>
                                        <li><a href="{{route('notices')}}">Notices</a></li>

                                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                                        <li><a href="{{route('external_links')}}">External Links</a></li>
                                        <li class="dropdown hidden-xs" >
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span> &nbsp {{ $username }} &nbsp<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                              @if($level!=3)
                                              <li><a href="{{ URL::route('logout')}}">Logout</a></li>
                                              @else
                                              <li><a href="{{ URL::route('login')}}">Login</a></li>
                                              @endif
                                            </ul>
                                        </li>
                                    </ul>

                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>

                    </div>