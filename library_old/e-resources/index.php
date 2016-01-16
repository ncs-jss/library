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
                                        <?php if($flag==1)
        echo "<li><a href='../admin/index.php'>Dash Board</a></li>";
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
        
        
        <section class="e-resources">
            
            <div class="container-fluid">
                
                <div class="row">
                    
                    <div class="col-sm-1"></div>
                    
                    <div class="col-sm-8 col-xs-9">
                    
                        
                        <div class="row resources-content">
                            
                            <div class="col-sm-7">
                            
                            <h2>E-Resources</h2>
                            
                            <h3>IEEE ALL-society Periodicals Package (ASPP)</h3>
                            <p>It provides access to the IEEE core collection of, electronics, and computer science engineering. Over 145 IEEE online society-sponsored journals, transactions and magazines are included in this package with back file access to 2000. These are most highly cited journals in the field concentrating on theoretical and experimental papers, practical applications in research, design and specification.</p>
                            <a href="https://www.ieee.org/">IEEE Home</a>
                            
                            
                                <h3>ASCE</h3>
                                <p>The American Society of Civil Engineers (ASCE) is recognized globally for their significant contribution and dedication to the advancement of science and education in the civil engineering profession. The ASCE publishes 33 journals, periodicals and transactions that cover a comprehensive range of the civil engineering profession. ASCE journals are highly cited and are most relevant to the civil engineers for exchanging technical and professional knowledge. Information published in the journals of ASCE forms archival records not only of the technical advances of the ASCE but of the civil engineering profession as a whole.</p>
                            <a href="http://www.asce.org/">ASCE Home</a>
                            
                            
                            </div>
                            
                            
                            <div class="col-sm-5">
                            
                                <h4>Online Video Lectures</h4>
                                <ul>
                                    
                                    <li><a href="http://nptel.iitm.ac.in/">NPTEL Video lectures</a><p>(http://nptel.iitm.ac.in/)</p></li>
                                    <li><a href="http://www.youtube.com/user/nptelhrd?gl=IN&hl=en-GB">You Tube videos lectures on Engineering &amp Technology</a><p>(http://www.youtube.com/user/nptelhrd?gl=IN&hl=en-GB)
                                        </p></li>
                                    <li><a href="http://www.academicearth.org/subjects/">Academic Earth</a><p>(http://www.academicearth.org/subjects/)</p></li>
                                    <li><a href="http://www.comsoc.org/free-tutorials">IEEE Communications Society Conference tutorials (Free)</a><p>(http://www.comsoc.org/free-tutorials)</p></li>
                                    
                                </ul>
                                
                                <h4>Digital Resources</h4>
                                <ul>
                                    
                                    <li><a href="http://nptel.iitm.ac.in/">NPTEL Video lectures</a><p>(http://nptel.iitm.ac.in/)</p></li>
                                    <li><a href="http://www.youtube.com/user/nptelhrd?gl=IN&hl=en-GB">You Tube videos lectures on Engineering &amp Technology</a><p>(http://www.youtube.com/user/nptelhrd?gl=IN&hl=en-GB)
                                        </p></li>
                                    <li><a href="http://www.academicearth.org/subjects/">Academic Earth</a><p>(http://www.academicearth.org/subjects/)</p></li>
                                    <li><a href="http://www.comsoc.org/free-tutorials">IEEE Communications Society Conference tutorials (Free)</a><p>(http://www.comsoc.org/free-tutorials)</p></li>
                                    
                                </ul>
                                
                                <h4>Digital Resources</h4>
                                <ul>
                                    
                                    <li><a href="">E-book Collection</a></li>
                                    
                                    
                                    
                                </ul>
                            
                            </div>                            
                            
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-sm-2 col-xs-3">
                    
                        <div class="row sidebar">
                        
                            <h1>Navigation</h1>
                            <hr class="orange">
                                                     <ul>
                            
                                <li><a href="../services.php">Services</a></li>
                                <li><a href="../new-arrivals.php">New Arrival</a></li>
                                <li><a href="../news.php">News And Events</a></li>
                                <li><a href="../404.php">Library OPAC</a></li>
                                <?php if($flag==1)
                                echo "<li><a href='../admin/logout.php'>Logout</a></li>";
                                else
                                    echo "<li><a href='../admin-login.php'>Admin Login</a></li>";
                                ?>
                                
                            </ul>
                    
                            <?php if($flag!=1)
echo "                            <h1 id='other-headline'>Ask Librarian</h1>
                            <hr class='orange'>
                            <ul>
                            
                                <li><a href='../query.php'>Submit Query</a></li>
                                <li><a href='../suggest.php'>Suggest Books</a></li>
                                
                            </ul>";
?>
                            
                            <h1 id="other-headline">Registration</h1>
                            <hr class="orange">
                            <ul>
                            
                                <li><a href="../assets/files/(staff)membership.doc">Staff</a></li>
                                <li><a href="../assets/files/Librarymembership.doc">Students</a></li>
                                
                            </ul>
                        </div>
                    
                    </div>
                    
                    <div class="col-sm-1"></div>
                    

                    
                
                </div>
            
            </div>
            
        </section>
        
        
        
        

        <?php
        include('../backend/footer.php');
        ?>