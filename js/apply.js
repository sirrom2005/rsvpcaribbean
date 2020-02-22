$("#project_category_id").change(function() {
  $("#country_id").load( "includes/apply/ajax.country.list.php?id=" +  $("#project_category_id").val() + "&key=" + Math.random() );
  $.get("includes/apply/ajax.calendar.list.php", {id: $("#project_category_id").val(), key: Math.random()}).done(
          function( data ) {
            if(data===''){
               $("#startdate").hide();
               $("#startdate select").attr('disabled', true);  
               $("#start_date").show().attr('disabled', false);
               $("#end_date").show().attr('disabled', false);
            }else{
               $("#startdate").show();
               $("#startdate select").attr('disabled', false).html(data); 
               $("#start_date").hide().attr('disabled', true);
               $("#end_date").hide().attr('disabled', true);
            }
          }
       );
});


$("#country_id").change(function() {
  $("#state_id").load( "includes/apply/ajax.state.list.php?id=" +  $("#country_id").val() + "&key=" + Math.random() );
});

var valide = true;
var errStr = "";
$("#confirm_email").blur(function() {
    if($("#confirm_email").val() != $("#email").val()){
        valide = false;
        errStr = "Confirmation email does not match\n";
    }else{
        valide = true;
    }
});

$("#apply").submit(function() {
    if(valide){return true;}
    alert(errStr);
    return false;
});

