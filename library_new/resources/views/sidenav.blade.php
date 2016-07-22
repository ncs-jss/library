                  <div class="col-sm-2 col-sm-push-8 col-xs-12">

                        <div class="row sidebar">
                          <!-- New Bar -->

                          <div class="custom-collapse">
                            <div>
                              <label class="sidebar-label">
                              <h1>Navigation  <span class="hidden-sm hidden-md hidden-lg "> <i class="fa fa-caret-down"></i></span> </h1>
                              <button class="collapse-toggle " type="button" data-toggle="collapse" data-parent="custom-collapse" data-target="#side-menu-collapse-1">
                              </button>
                            </label>
                            </div>
                            <hr class="orange">

                            <ul class="list-group collapse" id="side-menu-collapse-1" >

                                <li class="list-group-item dropdown-toggle"><a href="{{route('services')}}">Services</a></li>
                                <li class="list-group-item dropdown-toggle"><a href="{{route('new_arrivals')}}">New Arrival</a></li>
                                <li class="list-group-item dropdown-toggle"><a href="{{route('login')}}">Users Login</a></li>
                                @if($level!=0)
                                <li class="list-group-item dropdown-toggle"><a href="{{route('user_queries')}}">View Queries</a></li>
                                @endif
                                <li class="list-group-item dropdown-toggle"><a href="{{route('null')}}">Library OPAC</a></li>

                            </ul>
                          </div>

                          <!-- New Bar End -->

                          <!-- New Bar -->

                          <div class="custom-collapse">
                            <div>
                              <label class="sidebar-label">
                                <h1 id="other-headline">
                                  @if($level!=0)
                                  Ask Librarian
                                  @else
                                  Librarian Tasks 
                                  @endif
                                  <span class="hidden-sm hidden-md hidden-lg "> <i class="fa fa-caret-down"></i></span> </h1>
                                <button class="collapse-toggle " type="button" data-toggle="collapse" data-parent="custom-collapse" data-target="#side-menu-collapse-2"></button>
                              </label>
                            </div>
                            <hr class="orange">
                            <ul class="list-group collapse" id="side-menu-collapse-2">
                                @if($level!=0)
                                <li class="list-group-item dropdown-toggle" ><a href="{{route('query')}}">Submit Query</a></li>
                                <li class="list-group-item dropdown-toggle" ><a href="{{route('suggest')}}">Suggest Books</a></li>
                                @else
                                <li class="list-group-item dropdown-toggle" ><a href="{{route('queries')}}">Queries</a></li>
                                <li class="list-group-item dropdown-toggle" ><a href="{{route('suggestions')}}">Suggested Books</a></li>
                                <li class="list-group-item dropdown-toggle" ><a href="{{route('add_books')}}">Add Books</a></li>
                                <li class="list-group-item dropdown-toggle" ><a href="{{route('view_menus')}}">View Menu Item</a></li>
                                <li class="list-group-item dropdown-toggle" ><a href="{{route('add_notices')}}">Add Notices</a></li>
                                @endif 
                                <li class="list-group-item dropdown-toggle" ><a href="{{route('view_papers')}}">View Question Papers</a></li>
                            </ul>
                          </div>

                          <!-- New Bar End  -->

                          <!-- New Bar -->
                          <div class="custom-collapse">
                            <div>
                              <label class="sidebar-label">
                                <h1 id="other-headline">Registration <span class="hidden-sm hidden-md hidden-lg "> <i class="fa fa-caret-down"></i></span> </h1>
                                <button class="collapse-toggle" type="button" data-toggle="collapse" data-parent="custom-collapse" data-target="#side-menu-collapse-3"></button>
                              </label>
                            </div>
                            <hr class="orange">
                            <ul class="list-group collapse" id="side-menu-collapse-3">

                                <li class="list-group-item dropdown-toggle" ><a href="{{route('null')}}">Staff</a></li>
                                <li class="list-group-item dropdown-toggle" ><a href="{{route('null')}}">Students</a></li>

                            </ul>
                          </div>
                          <!-- New Bar End -->
                          </div>

                    </div>