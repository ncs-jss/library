<?php
$flag=0;
session_start();
if(isset($_SESSION['username']))
{
    $flag=1;
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>JSSATEN | Library</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
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
                                    <a class="navbar-brand" href="index.php">
                                        <img class="img-responsive" src="assets/img/logo.png" width="100px"><p>Library</p>
                                    </a> 

                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                                        <li><a href="e-resources/index.php">E-Resources</a></li>
                                        <li><a href="notices/index.php">Notices</a></li>

                                        <li><a href="contact/index.php">Contact Us</a></li>
                                        <li><a href="external-links/index.php">External Links</a></li>
                                        <?php if($flag==1)
        echo "<li><a href='admin/index.php'>Dash Board</a></li>";
     ?>

                                    </ul>

                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>    
                        
                    </div>
                    
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
                    
                    <!-- carousel starts -->
                    <div class="col-sm-8 col-xs-9">
                    
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
                                        <img src="assets/img/1.jpg" class="img-responsive">
                                            
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/2.jpg" class="img-responsive">    
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/3.jpg" class="img-responsive">    
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
                    
                    <div class="col-sm-2 col-xs-3">
                    
                        <div class="row sidebar">
                        
                            <h1>Navigation</h1>
                            <hr class="orange">
                            <ul>
                            
                                <li><a href="services.php">Services</a></li>
                                <li><a href="new-arrivals.php">New Arrival</a></li>
                                <li><a href="news.php">News And Events</a></li>
                                <li><a href="404.php">Library OPAC</a></li>
                                <?php if($flag==1)
        echo "<li><a href='admin/logout.php'>Logout</a></li>";
     else
        echo "<li><a href='admin-login.php'>Admin Login</a></li>";
?>

                                
                            </ul>
                    
                 <?php if($flag!=1)
echo "                            <h1 id='other-headline'>Ask Librarian</h1>
                            <hr class='orange'>
                            <ul>
                            
                                <li><a href='query.php'>Submit Query</a></li>
                                <li><a href='suggest.php'>Suggest Books</a></li>
                                
                            </ul>";
?>
                            
                            <h1 id="other-headline">Registration</h1>
                            <hr class="orange">
                            <ul>
                            
                                <li><a href="assets/files/(staff)membership.doc">Staff</a></li>
                                <li><a href="assets/files/Librarymembership.doc">Students</a></li>
                                
                            </ul>
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
                        <div class="row">
                            <h2><span class="fa fa-bar-chart"></span></h2>
                        <h1>Library Collection</h1>
                        <hr class="thumbnail">
                        <p>There is a wide collection of books in the library.The general section along with the Book Bank contains enough no of books.</p>
                        <a href="collection.php"><button class="btn btn-primary">View</button></a>
                    
                        </div>
                    </div>
                    <div class="col-sm-3">
                    
                        <div class="row">
                            <h2><span class="fa fa-list"></span></h2>
                        <h1>Rules and Regulations</h1>
                        <hr class="thumbnail">
                        <p>Rules to be followed in library.<br>
                            1. I- cards are mandatory to gain entry to the library.<br>
                            2. I- cards are not transferable.<br>
                            3. All students are advised to bring their own I- cards while using the library.<br>

                            4. Loss of I cards should be reported immediately. The Library takes no responsibility if any book was issued on the lost card. 
                            </p>
                        <a href="rules.php"><button class="btn btn-primary">View All</button></a>
                        </div>
                    
                    </div>
                    <div class="col-sm-3">
                    
                        <div class="row">
                            <h2><span class="fa fa-clock-o"></span></h2>
                        <h1>Library Timings</h1>
                        <hr class="thumbnail">
                        <p>Get the timing for different sections of library.</p>
                        <a href="timings.php"><button class="btn btn-primary">View</button></a>
                        </div>
                    </div>
                    
                </div>
            
            </div>
        
        </section>
        
        
        
        <?php
        include('backend/footer.php');
        ?>