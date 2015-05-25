 
  
    <script type="text/javascript">

     function validateComment()
     {
      
      var x=document.forms["comment"]["header"].value;
      var y=document.forms["comment"]["comment"].value;

        if ((x==null || x=="") && (y==null || y==""))
         {
          alert("All Field must be filled out");
          return false;
         }
        if (x==null || x=="")
         {
          alert("Input your password");
          return false;
         }
        if (y==null || y=="")
         {
          alert("Include your comment");
          return false;
         }
     }
    </script>
    <!--this is a script for validating the input in to the registration form-->
    <script type="text/javascript">

    function validateForm()
    {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var c=document.forms["reg"]["mname"].value;
    var d=document.forms["reg"]["address"].value;
    var e=document.forms["reg"]["password"].value;   
    var h=document.forms["reg"]["gender"].value;
    

    
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e=="") && (h==null || h==""))
    {
    alert("All Field must be filled out");
    return false;
    }
    if (a==null || a=="")
    {
    alert("First name must be filled out");
    return false;
    }
    if (b==null || b=="")
    {
    alert("Last name must be filled out");
    return false;
    }
    if (c==null || c=="")
    {
    alert("middle name must be filled out");
    return false;
    }
    if (d==null || d=="")
    {
    alert("address must be filled out");
    return false;
    }
    if (e==null || e=="")
    {
    alert("password must be filled out");
    return false;
    }
   
    if (h==null || h=="")
    {
    alert("Please include your Gender");
    return false;
    }
    }
    </script>
 

<!-- c------------------------------------------------d----------f-----------d-----------------f--------------------------------------------------------------c  -->
   
      <div class= "modal fade" id="SupplyAgencyRegistration" role"dialog">
      <div class= "modal-dialog">
        <div class= "modal-content">
          <form class= "form-horizontal"  name="reg" action="sign-up.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data" autocomplete="on">  
            <div class= "modal-header">
              <h4 class= "position" >Add a supply chain agency</h4>              
              <div class= "position_data_dismis_sign" data-dismiss = "modal"><b>X</b></div>  
            </div>
    

            <div class= "modal-body">

              <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Agency Name: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="supply_agency_name" placeholder="Supply agency name"> <!--the form-control gives the form some styling-->
                </div>
              </div>

               <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Contact person: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="contact_person" placeholder="Contact person"> <!--the form-control gives the form some styling-->
                </div>
              </div>

               <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Contact Phone </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="contact_phone" placeholder="Contact phone"> <!--the form-control gives the form some styling-->
                </div>
              </div>

               <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> Description: </label>
                <div class= "col-lg-8">
                  <textarea class="form-control" rows="8" name="supply_chain_description" placeholder="Add description"></textarea>                
                </div>                
              </div> 


               
            </div> <!--end of the modal body-->

            <div class="modal-footer">
              <button class = "btn btn-primary" type="submit">Submit</button>
              <a class="btn btn-primary" data-dismiss = "modal">Close</a>                  
            </div>

          </form>
        </div>
      </div>
    </div>
    
<!--  ----------------------------------------------------------------------------------------------------------------------------------------------------------     -->



      <div class= "modal fade" id="FundingAgencyrRegistration" role"dialog">
      <div class= "modal-dialog">
        <div class= "modal-content">
          <form class= "form-horizontal"  name="reg" action="sign-up.php" onsubmit="return validateForm()" method="post" enctype="multipart/form-data" autocomplete="on">  
            <div class= "modal-header">
              <h4 class= "position" >Add a funding Agency</h4>              
              <div class= "position_data_dismis_sign" data-dismiss = "modal"><b>X</b></div>  
            </div>
    

            <div class= "modal-body">

              <div class= "form-group">
                <label for="contact-name" class="col-lg-4 control-label">Funding Agency Name: </label>
                <div class= "col-lg-8">
                  <input type="text" class="form-control" name="funding_agency_name" placeholder="Funding agency name"> <!--the form-control gives the form some styling-->
                </div>
              </div>


               <div class "form-group">
                <label for="contact-msg" class="col-lg-4 control-label"> Description: </label>
                <div class= "col-lg-8">
                  <textarea class="form-control" rows="8" name="FundingAgencyDescription" placeholder="Add description"></textarea>                
                </div>                
              </div>  


               
            </div> <!--end of the modal body-->

            <div class="modal-footer">
              <button class = "btn btn-primary" type="submit">Submit</button>
              <a class="btn btn-primary" data-dismiss = "modal">Close</a>                  
            </div>

          </form>
        </div>
      </div>
    </div>