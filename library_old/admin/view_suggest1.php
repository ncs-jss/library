<?php 
session_start();
if(!isset($_SESSION['username']))
{
		$_SESSION['error_admin'] = "Login to view admin page";
		header('Location:../index.php');	
}
include("../suggest_view.php");
?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>JSSATEN | Library</title>
        <meta name="description" content="WalksinDelhi will enthral you with the scintillating view of heart of 'Dilli' ">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
       
        <header>
            
            <div class="container-fluid">
            
                <div class="row">
                
                    <!-- nav bar starts -->
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
                                    <a class="navbar-brand" href="../index.php">
                                        <img class="img-responsive" src="../assets/img/logo.png" width="100px"><p>Library</p>
                                    </a> 

                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                       <li class="active"><a href="../index.php">Home <span class="sr-only">(current)</span></a></li>
                                        <li><a href="../e-resources/index.php">E-Resources</a></li>
                                        <li><a href="../notices/index.php">Notices</a></li>	
                                        <li><a href="../contact/index.php">Contact Us</a></li>
                                        <li><a href="../external-links/index.php">External Links</a></li>
                                    </ul>

                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>    

                    </div>

                    <!-- nav bar ends -->
                    <div class="col-sm-1"></div>
                
                </div>    
            
            
            </div>
        
        </header>
        
        


        <section class="e-resources">

            <div class="container-fluid">

                <div class="row content">

                    <div class="col-sm-1"></div>

                    <div class="col-sm-8 col-xs-9">

                        <div class="row resources-content" id="services">

                            <h2>Queries</h2>
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
                                        <th>Query</th>
										<th>Roll No.</th>
										<th>Course</th>
										<th>Name</th>
                                        <th>Posted On</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php var_dump($rowsbooksfetched); ?>							<?php  
									for($i=0;$i<$num;$i++)
									{
										//echo"<tr><th scope="row">".$rowsbooksfetched['id']."</th><td></td><td>".$rowsbooksfetched['bookname']."</td><td>".$rowsbooksfetched['author']."</td><td></td><td>".$rowsbooksfetched['publisher']."</td><td>"."<button type="submit" class="btn btn-primary">Delete</button></td></tr>";
									}
								?>
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

                    <div class="col-sm-2 col-xs-3">

                        <div class="row sidebar">

                            <h1>Navigation</h1>
                            <hr class="orange">
                                                       <ul>
                            
                               
                                <li><a href="post_notices.php"> Post Notices</a></li>
                                <li><a href="post_newarrivals.php"> Post New Arrival</a></li>
                                <li><a href="post_news.php">Post News And Events</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                
                            </ul>
                    
                            <h1 id="other-headline">Suggest Section</h1>
                            <hr class="orange">
                            <ul>
                            
                                <li><a href="view_query.php">View Query</a></li>
                                <li><a href="view_suggest.php">View Suggested Books</a></li>
                             
                            </ul>
                            
                            
                        </div>

                    </div>

                    <div class="col-sm-1"></div>




                </div>

            </div>

        </section>

        <div class="filler">filler</div>
  
        <?php
        include('../backend/footer.php');
        ?>