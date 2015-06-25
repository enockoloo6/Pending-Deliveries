<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php require_once('header.php'); ?>


<table id="entrydata" border="1" style="width:100%" class="table table-striped">
 <thead>
  <tr class="bg-primary">
    <th><b>Commodity</b></th>
    <th><b>Supporting Agency</b></th>
    <th><b>Quantity</b></th>
    <th><b>E.T.A Details</b></th>
  </tr>
 </thead>
     <?php foreach ($PSTOCKS as $pendingstocks): ?>
  <tr>
    <td>
      <?php /*echo $central_level_data->commodity_name;*/
         foreach($COMMODITY as $COMM):

         if ($pendingstocks->commodity_id==$COMM->commodity_id){
            echo $COMM->commodity_name."  ".$COMM->pack_size; 
           }
         endforeach;?>
    </td>
    <td>
     <?php foreach($FUNDING as $FA):
          if ($pendingstocks->funding_agency_id==$FA->funding_agency_id){
             echo $FA->funding_agency_name; 
            }
          endforeach;?>
    </td>
    <td>
      <?php echo $pendingstocks->pending_deliveries;?>
    </td>
    <td>
     <?php  echo $pendingstocks->expected_date_delivery;?>
    </td>
  </tr>
      <?php endforeach;?>

</table> 