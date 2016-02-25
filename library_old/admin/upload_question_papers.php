
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
                       Please choose a .pdf to upload: <input type="file" name="image" required><br>
                       Please enter the subject of the document: <input type="text" name="subject" required><br><br>
                       Please enter the course:    

                       <select id = "course" name = "course" onchange = "funk()" required>
                         <option value="1">Btech</option>
                         <option value="2">MBA</option>
                         <option value="3">MCA</option>
                         <option value="4">Mtech</option>
                       </select><br><br>

                       <div id = "sem">Please enter the semester of the document:    

                         <select id = "semester" name = "semester" required>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">4</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                         </select><br><br></div>

                         <div id= "yr">
                           Please enter the year of the document:    

                           <select id ="year" name = "year" required>
                             <?php

                             for($i=0;$i<16;$i++)
                             { 
                               $j=$i+2000; ?>
                               <option value="<?php echo $j ?>"><?php echo $j ?></option>
                               <?php }
                               ?>
                             </select><br><br>

                           </div>

                           <div id = "br">
                            Please enter the branch:     
                            <select name = "branch" required>
                             <?php
                             include('../library.php');
                             $db = connect(); 
                             $branches = $db->query("SELECT * from branch_name");
                             while($branch = $branches->fetch_array())
                             {
                              ?>
                              <option val="<?php echo $branch['id']?>"><?php echo $branch['branch'] ?></option>
                              <?php
                              echo "<br>";
                            }
                            ?>

                          </select><br>
                        </div>
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
                           <li><a href="upload_question_papers.php">Upload Question Paper</a></li>
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

              <script type="text/javascript">
              function funk(){
                var caller = document.getElementById('course');
                var br = document.getElementById('br');
                var sems = 0;
                console.log(caller.value);
                if(caller.value == 1){
                  sems = 8;
                  console.log(sems);
                  br.style.display = 'block';
                }else if(caller.value == 2 || caller.value == 4){
                  sems = 4;
                  console.log(sems);
                  br.style.display = 'none';
                }else{
                  sems = 6;
                  console.log(sems);
                  br.style.display = 'none';
                }
                var x ='';
                var i = 0;
                while(sems > i++){
                  x = x+ "<option value="+i+">"+i+"</option>";
                }
                document.getElementById('semester').innerHTML = x;
              }
              </script>

              <?php   

              include('../backend/footer.php');
              $_SESSION['messageErr']=$_SESSION['subjectErr']=$_SESSION['message']=$_SESSION['subject']=$_SESSION['info']="";
              ?>