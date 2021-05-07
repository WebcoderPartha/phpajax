$(document).ready(function(){

 // User Check
  $('#username').blur(function (){
    var username = $(this).val();
    $.ajax({
     url:"check/checkuser.php",
     method:"POST",
     data: {username:username},
     dataType:"text",
     success: function (data){
       $('#userstatus').html(data);
     }
    });
  });

  // Name Check
 $('#name').blur(function (){
   var name = $(this).val();
   $.ajax({
    url: "check/checkuser.php",
    method: "POST",
    data: {banglaName:name},
    dataType: 'text',
    success: function (data){
     $('#namestatus').html(data);
    }
   });
 });


 });  