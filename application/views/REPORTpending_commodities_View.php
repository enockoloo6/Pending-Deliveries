<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once('header.php'); ?>

	
 <table border="1" style="width:100%" class="table table-striped">
 
 	<tr >
     <tr><b>Expected Stocks</b><br>
 	   <b>Expected Shipments Totals</b></tr>

  <thead>
 	<tr class="bg-primary">
    <td><b>commodity</b></td>
    <td><b>Totals</b></td>
  </tr>
  </thead>

    <?php foreach ($pendingConsignments as $pending_totals): ?>
   <tr>
	<td><?php
foreach($COMMODITY as $COMM):

if ($pending_totals->commodity_id==$COMM->commodity_id){
  echo $COMM->commodity_name; 
  }
  endforeach;   
  ?>

  </td>
   	<td>
   	<?php echo $pending_totals->PendingTotal;?>

  </td></tr>
<?php endforeach?>
  </table> 

