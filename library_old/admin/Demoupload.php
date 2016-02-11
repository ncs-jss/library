
        


        <section class="e-resources">

            <div class="container-fluid"><?php

    session_start();

if(!isset($_SESSION['username']))
    {
        $_SESSION['info'] = "Login to view admin page";
        header('Location:../admin-login.php');    
    }
?>
<style>
.error {color: #FF0000;}
</style>

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

        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

        <script type="text/javascript">
          $(document).ready(function{
            var branch = ['CS', 'IT', 'ME', 'EEE', 'ECE', 'EE', 'MP', 'IC', 'CE'];
            var year = [ 4,2,3,2];

            $('#course').change(function{
              var val = $this.val();

              if(val == 'Btech'){
                var x = '';
                var y = '';

                for (var i = year[0].length - 1; i >= 0; i--) {
                   y = '<option value=' + i + '>' + i + '</option>';
                };

                for (var i = branch.length - 1; i >= 0; i--) {
                  x = '<option value=' + branch[i] + '>' + branch[i] + '</option>';
                };
                $('#branch').html(x);
                $('#year').html(y);

              }else if(val == 'Mtech'){
                $('#branch').attr('disabled', 'disabled');
              }else if(val == 'MBA'){

              }else{

              }
            });

          });         
        </script>



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
        

                <div class="row content">

                    <div class="col-sm-1"></div>

                    <div class="col-sm-8 col-xs-9">

                        <div class="row resources-content" id="services">
                            <br><br>
                            <h2>Welcome Administrator</h2>
                            
<div class="col-sm-1"></div>
                    
                    <div class="col-sm-8 col-xs-9">
                    
                        <div class="row resources-content" id="services">





<form enctype="multipart/form-data" action="phpstore.php" method="post">
     <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
     <input type="hidden" name="completed" value="1">
       Please choose a .pdf to upload: <input type="file" name="image"><br>
       Please enter the course:    <select name = "course" id = 'course'>
  <option value="btech">Btech</option>
  <option value="MBA">MBA</option>
  <option value="MCA">MCA</option>
  <option value="Mtech">Mtech</option>
</select><br>
       Please enter the subject of that document: <input type="text" name="subject"><br><br>
       Please enter the year of that document:    <select name = "year" id = 'year'>
  <option value="1">1</option>
  
</select><br>
       Please enter the branch:                  <select name = "branch" id = "branch">
  
</select><br>
<p>
<?php

    
if(!isset($_SESSION['info']))
    {
    echo $_SESSION['info'];
    }
?>
</p>
     <input type="submit" class="btn btn-primary"></formsm><br>


                        
                            <!-- 
                               <button type="submit" class="btn btn-primary" id="arrivalpost" name="arrivalpost" >Upload  paper</button><span class="error"><?php/* if(isset($_SESSION['info']))echo $_SESSION['info'];*/?></span>
                            
                                  <button type="submit" class="btn btn-primary" id="arrivalpost" name="arrivalpost" >View papar</button><span class="error"><?php /*if(isset($_SESSION['info']))echo $_SESSION['info'];*/?></span> -->
                            <div class="col-sm-3"></div>
                            

                        
                        </div>
                        
                    </div>
                    

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
$_SESSION['messageErr']=$_SESSION['subjectErr']=$_SESSION['message']=$_SESSION['subject']=$_SESSION['info']="";
?>