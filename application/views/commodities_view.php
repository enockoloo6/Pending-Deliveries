<?php require_once('header.php'); ?>

<h1>Edit Commodities Data</h1><hr/>
<div class="col-lg-6">


           <?php if(isset($status)){?>
           <div class="row">
           <div class="alert alert-success"><?=$status?></div>
           </div>
           <?php }?>
<p>Click On the Commodity you want to Edit</p>
<!-- Fetching Names Of All Commodities From Database -->

  <table id= "entrydata"  class="table table-striped  table-hover">
    <thead>
       <tr class="bg-primary">
        <th>#</th> 
        <th>Name</th> 
       </tr>
    </thead>
  <tbody>
<?php $count=1; ?>

<?php foreach ($commodities as $commodity): ?>

	<tr>
  <td><?php echo $count; ?></td>
  <td><a href="<?php echo base_url() . "index.php/update_ctrl/show_commodities_id/" . $commodity->commodity_id; ?>"><?php echo $commodity->commodity_name; ?></a></td>
  </tr>
  <?php $count++; endforeach; ?>

  </tbody>
  </table>
 <a href="#CommodityRegistration" data-toggle="modal"><div class="btn btn-success"><h5>Add a new Commodity</h5></div></a>

</div>
<div class="col-lg-6">
<!-- Fetching All Details of Selected agency From Database And Showing In a Form -->
<?php foreach ($single_commodity as $commodity): ?>
<p>Edit Detail & Click Update Button</p>

<form role="form" action="<?= base_url();?>index.php/update_ctrl/update_commodity_id" method="post" enctype="multipart/form-data" autocomplete="on">

<!--<form method="post" action="<?php// base_url() . "index.php/update_ctrl/update_agency_id1"?>">-->
<label id="hide">Id :</label>
<input type="text" id="hide" name="commodity_id" value="<?php echo $commodity->commodity_id; ?>">
<label>Commodity Name :</label>

<input type="text" name="commodity_name" value="<?php echo $commodity->commodity_name; ?>">
<label>Pack Size :</label>
<input type="text" name="pack_size" value="<?php echo $commodity->pack_size; ?>">
<label>Funding Agency Name:</label>

          <!-- GET NAME FROM THE FUNDING AGENCY WHERE ID ==COM FA ID -->
          <select name="funding_agency_name" class="form-control">
          <?php foreach ($funding_agency as $funds):?>
          <option name="funding_agency_name" <?php if($funds->funding_agency_id==$commodity->funding_agency_id){echo"selected";} ?>><?php echo $funds->funding_agency_name;?></option>
          <?php endforeach; ?>          

           </select>
         

<label>Commodity Description :</label>
<input type="text" name="commodity_description" value="<?php echo $commodity->commodity_description; ?>">
<input type="submit" id="submit" name="dsubmit" value="Update">


</form>

<form role="form" action="<?= base_url();?>index.php/update_ctrl/delete_commodity" method="post" enctype="multipart/form-data" autocomplete="on">
<label id="hide">Id :</label>
<input type="text" id="hide" name="commodities_id" value="<?php echo $commodity->commodity_id; ?>">
<input type="submit" class="delete-button" id="delete" name="dsubmit" value="Delete">
</form>

<?php endforeach; ?>



</div>

<?php require_once('footer.php'); ?>