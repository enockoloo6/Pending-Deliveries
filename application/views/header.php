
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta name="generator" content="CoffeeCup Image Mapper">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

  
    <link href="<?= base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">     
    <link rel="<?= base_url();?>stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <link href="<?= base_url();?>bootstrap/css/styles.css" rel="stylesheet" type="text/css">

    <!-- DATEPICKER -->
    <!-- <link href="<?= base_url();?>./extensions/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
    <link href="<?= base_url();?>./extensions/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <!-- DATEPICKER -->
 
  
    <!--DATATABLE-->
    <link  href="<?= base_url();?>DataTables-1.10.7/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css">    
    <script type="text/javascript" charset="utf8" src="<?= base_url();?>DataTables-1.10.7/media/js/jquery.js"></script>  
    <script type="text/javascript"  charset="utf8"  src="<?= base_url();?>DataTables-1.10.7/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8"  src="<?= base_url();?>DataTables-1.10.7/media/js/jquery.dataTables.min.js"></script>
    <!--DATA TABLE-->    
  
   
  </head>
  <body>  

   
   <div style= "background-color:#276696"  class="navbar navbar-inverse navbar-fixed-top">

      <div class="container"><!--this contains the everything to be place in the navbar-->
        
        <button class= "navbar-toggle" data-toggle = "collapse" data-target = "#navHeaderCollapse">
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span>  
          <span class="icon-bar"></span> 
        </button>

        <div class="collapse navbar-collapse" id="navHeaderCollapse">

        <a href="<?= base_url();?>"class="navbar-brand"><b ><div style= "color:white">MALARIA DRUGS STOCK MONITORING TOOL</div></b></a>


          <ul class="nav navbar-nav navbar-right">

            <li class="active"><a href="<?= base_url();?>">Home</a></li><!--this is the general outlook of the site by everyone-->
                    


           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setup<b class="caret"></b> </a>
              <ul class= "dropdown-menu">              
                <li><a href="<?= base_url();?>index.php/update_ctrl/showFundingAgency" >Funding Aggency</a></li>


            
                <li><a href="<?= base_url();?>index.php/update_ctrl/show_agency_id" >Supply Chain Agencies</a></li>

                <li><a href="<?= base_url();?>index.php/update_ctrl/show_commodities_id">Commodities</a></li>       
                <li><a href="#">Zones</a></li>
                <li><a href="<?= base_url();?>index.php/update_ctrl/show_county_id">Counties</a></li>
                <li><a href="<?= base_url();?>index.php/update_ctrl/showStaticParams">Static Parameters</a></li>
              </ul>
            </li>  



           <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Transactions<b class="caret"></b> </a>
              <ul class= "dropdown-menu">              
                <li><a href="<?= base_url();?>index.php/update_ctrl/show_pending_stocks" >Pending Shipments</a></li>
                 <li><a href="<?= base_url();?>index.php/update_ctrl/show_central_level_stock">Current Stock</a></li>

                <li><a href="#">View Transactions</a></li>
              </ul>
            </li>  



            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports<b class="caret"></b> </a>
              <ul class= "dropdown-menu">              
                <li><a href="#" >Central</a></li>
                <li><a href="#">County</a></li>
                <li><a href="<?= base_url();?>index.php/update_ctrl/DisplayPendingShipments">Pending Commodities</a></li>
                <li><a href="<?= base_url();?>index.php/update_ctrl/pendingstocksReports">Commodities</a></li>
                <li><a href="<?= base_url();?>index.php/update_ctrl/commoditiesPerAgency">Commodities/Agency</a></li>
              </ul>
            </li> 
               

          </ul>

        </div>       

      </div>
    </div><!--this is the end of the top navbar-->

<!-- BODY CONTAINER-->
    <div classs="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default" id="body">
            <div class="panel-body">
              <!--HEADER-->
              <div class="page-header"> 

              <!-- <div class="col-lg-4"></div><h4 class="list-group-item-heading"><b><p>MALARIA DRUGS STOCK MONITORING TOOL</p></b></h4>                -->
        
              </div> 
              <!-- BODY CONTAINER-->


              <?php require_once('forms.php'); ?>
