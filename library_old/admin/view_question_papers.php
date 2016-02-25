<?php
include('../library.php');
$rownoticefetched=array();
$rownoticefetched=display_papers();
$count=sizeof($rownoticefetched);
$i=0;
$flag=0;
session_start();
if(isset($_SESSION['username']))
{
    $flag=1;
}
$s="";
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
    <meta name="description" content="WalksinDelhi will enthral you with the scintillating view of heart of 'Dilli' ">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= 
    sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/main.css">

    <script src="assets/js/initiate.js"></script>  
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="../assets/js/vendor/jquery-1.11.1.min.js"></script>
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
                                           <li><a href="view_question_papers.php">Question Papers</a></li>
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

                            <h2>Previous Year Question Papers</h2>
                            <div class="col-sm-4 ">

                            </div>
                            <div class="col-sm-2"></div>
                            
                        </div>
                        
                        <div>
                            <?
                                $query = "select * -"
                                $db->mysql_query() 
                            ?>
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

        <div class="filler">filler</div>

        <?php
        include('../backend/footer.php');
        ?>