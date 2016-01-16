<?php 
session_start();


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
		<style>
.error {color: #FF0000;}
</style>

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
                
                <div class="row content">
                    
                    <div class="col-sm-1"></div>
                    
                    <div class="col-sm-8 col-xs-9">
                    
                        <div class="row resources-content" id="services">
                        
                            
                            
                            <div class="col-sm-8 form-query">
                                <h2>Suggest a book</h2>
                                
								<form action="suggest_ins.php"  method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="sr-only">Title:</label>
                                        <input type="text" class="form-control" name="title" id="title"  placeholder="Title of the book" value="<?php if(isset($_SESSION['title']))echo $_SESSION['title'];?>"><span class="error"><?php if(isset($_SESSION['titleErr']))echo $_SESSION['titleErr'];?></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Author:</label>
                                        <input type="text" class="form-control" name="author" id="author" placeholder="Author's Name" value="<?php if(isset($_SESSION['author']))echo $_SESSION['author'];?>"><span class="error"><?php if(isset($_SESSION['author']))echo $_SESSION['authorErr'];?></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Publisher</label>
                                        <input type="text" class="form-control" name="publisher" id="publisher" placeholder="Publisher's Name" value="<?php if(isset($_SESSION['publisher']))echo $_SESSION['publisher'];?>"><span class="error"> <?php if(isset($_SESSION['publisherErr']))echo $_SESSION['publisherErr'];?></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Edition</label>
                                        <input type="text" class="form-control" name="edition" id="edition" placeholder="Edition" value="<?php if(isset($_SESSION['edition']))echo $_SESSION['edition'];?>"><span class="error"> <?php if(isset($_SESSION['editionErr']))echo $_SESSION['editionErr'];?></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Volume</label>
                                        <input type="text" class="form-control" name="volume" id="volume" placeholder="Volume" value="<?php if(isset($_SESSION['volume']))echo $_SESSION['volume'];?>"><span class="error"> <?php if(isset($_SESSION['volumeErr']))echo $_SESSION['volumeErr'];?></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Review</label>
                                        <input type="text" class="form-control" name="review" id="review" placeholder="Review" value="<?php if(isset($_SESSION['review']))echo $_SESSION['review'];?>"><span class="error"> <?php if(isset($_SESSION['reviewErr']))echo $_SESSION['reviewErr'];?></span>
                                    </div>
                                   
                                    
                                    
                                    
                                    <button type="submit" id="suggest" name="suggest" value="suggest" id="suggest" class="btn btn-primary">Submit</button><span class="error"><?php  echo $_SESSION['info'];?></span>
                                </form>
                                
                            </div>
                            <div class="col-sm-3"></div>
                            

                        
                        </div>
                        
                    </div>
                    
                    <div class="col-sm-2 col-xs-3">
                    
                        <div class="row sidebar">
                        
                            <h1>Navigation</h1>
                            <hr class="orange">
                                                        <ul>
                            
                                <li><a href="services.php">Services</a></li>
                                <li><a href="new-arrivals.php">New Arrival</a></li>
                                <li><a href="admin-login.php">Admin Login</a></li>
                                <li><a href="news.php">News And Events</a></li>
                                <li><a href="404.php">Library OPAC</a></li>
                                
                            </ul>
                    
                            <h1 id="other-headline">Ask Librarian</h1>
                            <hr class="orange">
                            <ul>
                            
                                <li><a href="query.php">Submit Query</a></li>
                                <li><a href="suggest.php">Suggest Books</a></li>
                                
                            </ul>
                            
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
        include('backend/footer.php');
        ?>
<?php 
$_SESSION['titleErr']=$_SESSION['authorErr']=$_SESSION['publisherErr']=$_SESSION['editionErr']=$_SESSION['volumeErr']=$_SESSION['reviewErr']=$_SESSION['info']="";
$_SESSION['title']=$_SESSION['author']=$_SESSION['publisher']=$_SESSION['edition']=$_SESSION['volume']=$_SESSION['review']="";
?>