<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once('header.php'); ?>


 <table id="entrydata" border="1" class="table table-striped">

<thead>
<tr class="bg-primary">
<th><b>Supporting Agency Totals</b></th>
<th><b></b></th>
</tr>
</thead>

<?php foreach($COMMODITY as $COMM):?>
  <tr>
    <td width="50%">
      <?php echo $COMM->commodity_name; ?>
    </td>
    <td>
      <table border="1.0" width="100%">
         <?php foreach($FUNDING as $FA): ?>
        <tr>
          <td height="50%">
            <?php echo $FA->funding_agency_name;?>
          </td>
                     <?php 
          $sum=0;
          foreach($PSTOCKS as $ps):
            if (($COMM->commodity_id==$ps->commodity_id) && $FA->funding_agency_id==$ps->funding_agency_id) {
              $sum=$sum+$ps->pending_deliveries;
                //echo $sum;
            }else
            {
             // echo 0;
            }


            endforeach;
          ?>
          <td  width="50%">
            <?php echo $sum;?>
          </td>
        </tr>
        <?php endforeach;?>
      </table>
    </td>
  </tr>
<?php endforeach;?>
</table>
