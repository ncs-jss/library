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
        <meta name="description" content="WalksinDelhi will enthral you with the scintillating view of heart of 'Dilli' ">
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
                                        <li><a href="admin/view_question_papers.php">Question Papers</a></li>

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

                            <h2>Library Timings</h2>
                            <div class="contact-headline">
<p class="view">
		<b>Reference Section : </b>
		<br>
			Monday to Friday - 8:30 AM to 8:30 PM
		<br>
			Saturday - 8:30 AM to 5:00 PM
		<br><br>
		<b>Lending Section :</b>
		<br>
			Monday to Friday - 9:30 AM to 5:30 PM
		<br>    (Lunch Time - 1:30 PM to 2:30 PM)
		<br>
			Saturday - 9:00 AM to 1:30 PM
		<br>
		<br>
		<b>Books Transaction Timing : </b>
		<br>
			Monday to Friday - 9:30 AM to 1:30 PM & 2:30 PM to 5:30 PM
		<br>
			Saturday - 9:00 AM to 1:30 PM
		<br>
        </p>                                
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-2 col-xs-3">

                        <div class="row sidebar">

                            <h1>Navigation</h1>
                            <hr class="orange"><ul>



                                 <?php if($flag==1)
                                 {
                                echo "<li><a href='admin/post_notices.php'> Post Notices</a></li>";
                                echo "<li><a href='admin/post_newarrivals.php'> Post New Arrival</a></li>";
                                echo "<li><a href='admin/post_news.php'>Post News And Events</a></li>";
                                echo "<li><a href='admin/upload_question_papers.php'>Upload question papers</a></li>";
                                echo "<li><a href='admin/logout.php'>Logout</a></li>";

                                echo "<h1 id='other-headline'>Suggest Section</h1>
                            <hr class='orange'>
                            <ul>
                            
                                <li><a href='view_query.php'>View Query</a></li>
                                <li><a href='view_suggest.php'>View Suggested Books</a></li>
                                
                            </ul>";
                            
                                
                                 }
                                 else{
                                    echo "<li><a href='services.php'>Services</a></li>";
                                echo "<li><a href='new-arrivals.php'>New Arrival</a></li>";
                                
                                echo "<li><a href='news.php'>News And Events</a></li>";
                                echo "<li><a href='404.php'>Library OPAC</a></li>";
                                echo "<li><a href='admin-login.php'>Admin Login</a></li>";
                                echo "  <h1 id='other-headline'>Ask Librarian</h1>
                                    <hr class='orange'>
                                    <ul>
                            
                                <li><a href='query.php'>Submit Query</a></li>
                                <li><a href='suggest.php'>Suggest Books</a></li>
                                
                                 </ul>";

                                 }                       ?></ul>
                    
 
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

        <div class="filler">filler</div>
        
        
        <?php
        include('/backend/footer.php');
        ?>