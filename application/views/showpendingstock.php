
<?php require_once('header.php'); ?>

<script>
	

</script>


<div id="container">
<div id="wrapper">
<h1>Pending Stock</h1><hr/>
<div id="menu">

           <?php if(isset($status)){?>
           <div class="row">
           <div class="alert alert-success"><?=$staus?></div>
           </div>
           <?php }?>
<p>click to edit item</p>
<!-- Fetching Names Of All Agencies From Database -->
<ol>
<?php foreach ($PSTOCKS as $pendingstocks): ?>
<li><a href="<?php echo base_url() . "index.php/update_ctrl/show_pending_stocks/" . $pendingstocks->pendingstocksId; ?>"><?php 
foreach($COMMODITY as $COMM):

if ($pendingstocks->commodity_id==$COMM->commodity_id){
	echo $COMM->commodity_name; 
	}
	endforeach; ?></a></li>
<?php endforeach; ?>
<a href="#PendingStock" data-toggle="modal"><div class="btn btn-success"><h5>Add a new Transaction</h5></div></a>
</ol>
</div>
<div id="detail">
<!-- Fetching All Details of Selected agency From Database And Showing In a Form -->
<?php foreach ($single_PSTOCKS as $pendingstocks): ?>
<p>Edit Detail & Click Update Button</p>

<form role="form" action="<?= base_url();?>index.php/update_ctrl/updatePendingDeliveryid" method="post" enctype="multipart/form-data" autocomplete="on">

<!--<form method="post" action="<?php// base_url() . "index.php/update_ctrl/update_agency_id1"?>">-->
<label id="hide">Id :</label>
<input type="text" id="hide" name="pendingstockid" value="<?php echo $pendingstocks->pendingstocksId; ?>">

<!-- <label>Pack Size :</label>
<input type="text"  name="pack_size" value="<?php echo $pendingstocks->pack_size; ?>"> -->
<label>Commodity Name :</label>

       <select name="commodity_name" class="form-control">
          <?php foreach($COMMODITY as $COM):?>

          <option name="commodity_name" <?php if ($pendingstocks->commodity_id==$COM->commodity_id) {echo "Selected";      	
          } ?> ><?php echo $COM->commodity_name;?></option>
          <?php endforeach; ?> 
       </select>




<label>Funding Agency :</label>


       <select name="funding_agency" class="form-control">
          <?php foreach($FUNDING as $FA):?>

          <option name="funding_agency" <?php if ($pendingstocks->funding_agency_id==$FA->funding_agency_id) {echo "Selected";      	
          } ?> ><?php echo $FA->funding_agency_name;?></option>
          <?php endforeach; ?> 
       </select>



<label>Pending Deliveries :</label>
<input type="text" name="pending_deliveries" value="<?php echo $pendingstocks->pending_deliveries; ?>">
<label>Expected date of delivery :</label>
<input type="text" id="deliverydate" name="expected_date_delivery" value="<?php echo $pendingstocks->expected_date_delivery; ?>">
<label>Description :</label>
<input type="text" name="pddescription" value="<?php echo $pendingstocks->comments; ?>">



<input type="submit" id="submit" name="dsubmit" value="Update">


</form>

<form role="form" action="<?= base_url();?>index.php/update_ctrl/delete_pending_stock" method="post" enctype="multipart/form-data" autocomplete="on">
<label id="hide">Id :</label>
<input type="text" id="hide" name="pendingstockid" value="<?php echo $pendingstocks->pendingstocksId; ?>">
<input type="submit" class="delete-button" id="delete" name="dsubmit" value="Delete">
</form>

<?php endforeach; ?>



</div>
</div>
</div>


<?php require_once('footer.php'); ?>