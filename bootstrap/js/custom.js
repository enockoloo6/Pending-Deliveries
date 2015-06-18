
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


    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
        
    });
    $('.form_time').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });

   

