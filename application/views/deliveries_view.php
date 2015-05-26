
 <?php require_once('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head> 
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

  
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"><!--link the html code to the bootstrap-->
    <link href="bootstrap/css/styles.css" rel="stylesheet">
   
  </head>
  <body>  




   
   <div style= "background-color:#276696"  class="navbar navbar-inverse navbar-static-top">

      <div class="container"><!--this contains the everything to be place in the navbar-->
        
        <button class= "navbar-toggle" data-toggle = "collapse" data-target = "#navHeaderCollapse">
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span>  
          <span class="icon-bar"></span>   

        </button>

        <div class="collapse navbar-collapse" id="navHeaderCollapse">

          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="index.php">Home</a></li><!--this is the general outlook of the site by everyone-->
          

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Supply Chain Agencies<b class="caret"></b> </a>
              <ul class= "dropdown-menu">              
                <li><a href="#SupplyAgencyRegistration" data-toggle="modal">Add</a></li>
                <li><a href="login.php">View</a></li>
              </ul>
            </li>  


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Funding Agencies<b class="caret"></b> </a>
              <ul class= "dropdown-menu">              
                <li><a href="#FundingAgencyrRegistration" data-toggle="modal">Add</a></li>
                <li><a href="#">View</a></li>
              </ul>
            </li>  

               

          </ul>

        </div>       

      </div>
    </div><!--this is the end of the top navbar--> 























    <!--this is the div for showing the box enclosing a picture or a text-->
    <div class="container">
      <div class="row">

        <div class="col-lg-12">

          <div class="panel panel-default">

            <div class="panel-body">

              <div class="page-header">           

        
              </div>
              
            <!--  <p> the body section/p>
             <a href="#" class= "btn btn-danger">SEE ALL</a>-->
            </div>

          </div>

        </div>     
        



            
          </div>    
      </div>

     
  
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script> 
  
    </body>
    </html>

