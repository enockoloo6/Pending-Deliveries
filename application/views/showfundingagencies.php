

<?php require_once('header.php'); ?>

<h1>Edit Agencies Data</h1><hr/>
<div class="col-lg-6">

           <?php if(isset($status)){?>
           <div class="row">
           <div class="alert alert-success"><?=$staus?></div>
           </div>
           <?php }?>
<p>Click On the Agency you want to Edit</p>
<!-- Fetching Names Of All Agencies From Database -->
  <table id= "entrydata"  class="table table-striped  table-hover">
    <thead>
       <tr class="bg-primary">
        <th>#</th> 
        <th>Name</th> 
       </tr>
    </thead>
	<tbody>

<?php $count=1; ?>	
<?php foreach ($fundingagencies as $agency): ?>
<tr>
<td><?php echo $count; ?></td>	
<td><a href="<?php echo base_url() . "index.php/update_ctrl/showFundingAgency/" . $agency->funding_agency_id; ?>"><?php echo $agency->funding_agency_name; ?></a></td>
</tr>
<?php $count++; endforeach; ?>

 </tbody>
 </table>

<a href="#FundingAgencyRegistration" data-toggle="modal"><div class="btn btn-success"><h5>Add a Transaction</h5></div></a>
</div>

<div class="col-lg-6">
<!-- Fetching All Details of Selected agency From Database And Showing In a Form -->
<?php foreach ($single_fundingagency as $agency): ?>
<p>Edit Detail & Click Update Button</p>

<form role="form" action="<?= base_url();?>index.php/update_ctrl/updateFundingAgencyid" method="post" enctype="multipart/form-data" autocomplete="on">

<!--<form method="post" action="<?php// base_url() . "index.php/update_ctrl/update_agency_id1"?>">-->
<label id="hide">Id :</label>
<input type="text" id="hide" name="funding_agency_id" value="<?php echo $agency->funding_agency_id; ?>">
<label>Agency Name :</label>
<input type="text" name="funding_agency_name" value="<?php echo $agency->funding_agency_name; ?>">
<label>Description :</label>
<input type="text" name="funding_agency_description" value="<?php echo $agency->comment; ?>">
<input type="submit" id="submit" name="dsubmit" value="Update">


</form>

<form role="form" action="<?= base_url();?>index.php/update_ctrl/deleteFundingAgency" method="post" enctype="multipart/form-data" autocomplete="on">
<label id="hide">Id :</label>
<input type="text" id="hide" name="funding_agency_id" value="<?php echo $agency->funding_agency_id; ?>">
<input type="submit" class="delete-button" id="delete" name="dsubmit" value="Delete">
</form>

<?php endforeach; ?>

</div>


<?php require_once('footer.php'); ?>