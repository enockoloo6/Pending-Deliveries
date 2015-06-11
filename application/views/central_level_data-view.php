
<?php require_once('header.php'); ?>

<h1>Edit Central level data</h1><hr/> 



<div class="col-lg-6">

           <?php if(isset($status)){?>
           <div class="row">
           <div class="alert alert-success"><?=$staus?></div>
           </div>
           <?php }?>
<p>Click On the Commodity you want to Edit</p>

  <table id= "entrydata"  class="table table-striped  table-hover">
    <thead>
       <tr class="bg-primary">
        <th>#</th> 
        <th>Name</th> 
       </tr>
    </thead>
  <tbody>



  <?php $count=1; ?>
<?php foreach ($Central_level as $central_level_data): ?> 
 

  <tr>
  <td><?php echo $count; ?></td>  

  
  <td><a href="<?php echo base_url() . "index.php/update_ctrl/show_central_level_stock/" . $central_level_data->central_level_stock_id; ?>">
  
  <?php foreach ($commodities as $commodity):
     if ($commodity->commodity_id==$central_level_data->commodity_id) 
    echo $commodity->commodity_name;
    endforeach; ?>    
  </a></td>
  
  </tr>

  <?php $count++; endforeach; ?>
  </tbody>

  </table>

    <a href="#CentralLevelData" data-toggle="modal"><div class="btn btn-success"><h5>Record New Stock</h5></div></a>

 </div>

<div class="col-lg-6">
<!-- Fetching All Details of Selected agency From Database And Showing In a Form -->
<?php foreach ($single_Central_level as $central_level_data): ?>
<p>Edit Detail & Click Update Button</p>

<form role="form" action="<?= base_url();?>index.php/update_ctrl/updatecentral_levelid" method="post" enctype="multipart/form-data" autocomplete="on">

<!--<form method="post" action="<?php// base_url() . "index.php/update_ctrl/update_agency_id1"?>">-->
<label id="hide">Id :</label>
<input type="text" id="hide" name="central_level_stock_id" value="<?php echo $central_level_data->central_level_stock_id; ?>">
<label>Commodity Name :</label>

          <!-- GET NAME FROM THE FUNDING AGENCY WHERE ID ==COM FA ID -->
 <select name="commodity_name" class="form-control">
  <?php foreach ($commodities as $commodity):?>
  <option name="commodity_name" <?php if($commodity->commodity_id==$central_level_data->commodity_id) {echo"selected";} ?>><?php echo $commodity->commodity_name;?></option>
  <?php endforeach; ?>          
</select>

<label>Pack Size :</label>
<input type="text" name="pack_size" value="<?php echo $central_level_data->pack_size; ?>">
<label>Supply Agency :</label>



                  <select name="supply_chain_agency" class="form-control">            
                    <?php foreach ($supply_chain_agencies as $supply):?>
                     <option name="supply_chain_agency"><?php echo $supply->supply_chain_agency;?></option>
                    <?php endforeach; ?> 
                  </select>

 <label>Funding Agency: </label>
               
                  <select name="funding_agency" class="form-control"> 
                  <?php foreach ($fundingagencies as $agency): ?>                     
                     <option name="funding_agency"><?php echo $agency->funding_agency_name;?></option>
                  <?php endforeach; ?>
                  </select>            



<label>Opening Balance:</label>
<input type="text" name="opening_balance" value="<?php echo $central_level_data->opening_balance; ?>">
<label>Supplier Receipts :</label>
<input type="text" name="receipts_from_suppliers" value="<?php echo $central_level_data->receipts_from_suppliers; ?>">
<label>Total Issues :</label>
<input type="text" name="total_issues" value="<?php echo $central_level_data->total_issues; ?>">
<label>Closing Balance :</label>
<input type="text" name="closing_balance" value="<?php echo $central_level_data->closing_balance; ?>">
<label>Earliest Expiry :</label>
<input type="text" name="earliest_expiry_date" value="<?php echo $central_level_data->earliest_expiry_date; ?>">
<label>Quantity Expiring :</label>
<input type="text" name="quantity_expiring" value="<?php echo $central_level_data->quantity_expiring; ?>">

<input type="submit" id="submit" name="dsubmit" value="Update">


</form>

<form role="form" action="<?= base_url();?>index.php/update_ctrl/delete_central_level_data" method="post" enctype="multipart/form-data" autocomplete="on">
<label id="hide">Id :</label>
<input type="text" id="hide" name="central_level_stock_id" value="<?php echo $central_level_data->central_level_stock_id; ?>">
<input type="submit" class="delete-button" id="delete" name="dsubmit" value="Delete">
</form>

<?php endforeach; ?>

</div>





<?php require_once('footer.php'); ?>
