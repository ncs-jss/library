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
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  <script src="../assets/js/vendor/jquery-1.11.1.min.js"></script>
  <style media="screen">
  .paginate_button{
    margin-right: .5em !important;
  }

  a{
    margin-right: .5em !important;
  }

  .disabled{
    color: #454545;
  }

  .dataTables_filter, .dataTables_info
  {
    display: none;
  }

  .table-row th:nth-child(1){
    width: 10%;
  }
  .table-row th:nth-child(2){
    width: 25%;
  }
  .table-row th:nth-child(3){
    width: 10%;
  }
  .table-row th:nth-child(4){
    width: 45%;
  }
  .table-row th:nth-child(5){
    width: 10%;
  }
  </style>
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
</head>
<body>


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
          <script type="text/javascript" src="https://cdn.datatables.net/t/dt/dt-1.10.11/datatables.min.js"></script>

          <script type="text/javascript">
          $(document).ready(function(){
            //console.log($('#data'));
            $('#data').DataTable({
              "pageLength": 10,
              "bLengthChange": false,
              "aoColumnDefs": [
                { 'bSortable': false, 'aTargets': [0, 1, 2, 3, 4] }
              ],
              initComplete: function () {
                var i = -1;
                this.api().columns().every( function () {
                  var column = this;
                  i++;
                  if(! (i < 3))
                  return;
                  var select = $('<select><option value="">'
                  +'All</option></select>')
                  .appendTo( $(column.header()).empty() )
                  .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                      $(this).val()
                    );

                    column
                    .search( val ? '^'+val+'$' : '', true, false )
                    .draw();
                  } );

                  column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                  } );
                } );
              }
            });
          });
          </script>

          <?php
          //$db = connect();
          include('view_papers.php');
          $papers = get_papers();
          ?>

          <div>
            <table class="table table-striped table-row table1"
            id="data">
            <thead>
              <tr>
                <th>Course</th>
                <th>Branch</th>
                <th>Semester</th>
                <th>Name</th>
                <th>Download</th>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              while ($a = mysqli_fetch_array($papers)) {
                ?>
                <tr>
                  <td><?php echo get_course($a['course']) ?></td>
                  <td><?php echo get_branch($a['course'], $a['branch']) ?></td>
                  <td><?php echo $a['semester'] ?></td>
                  <td><?php echo $a['file_name'] ?></td>
                  <td>
                    <a href="images/<?php echo $a['file_name'] ?>">Download</a>
                  </td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
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
          echo ""?>                            <h1 id='other-headline'>Ask Librarian</h1>
          <hr class='orange'>
          <ul>

            <li><a href='../query.php'>Submit Query</a></li>
            <li><a href='../suggest.php'>Suggest Books</a></li>

          </ul>

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
