
$(document).ready(function(){
  $("#delete").click(function(){
    if (!confirm("Do you want to delete")){
      return false;
    }
  });
});


$(document).ready(function(){
  $(".update").click(function(){
    if (!confirm("Do you want to update")){
      return false;
    }
  });
});

$(document).ready(function(){
  $("#submit").click(function(){
    if (!confirm("Do you want to update")){
      return false;
    }
  });
});

