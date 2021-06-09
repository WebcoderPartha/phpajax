$(document).ready(function(){
 
 $('#username').blur(function () {
   var username = $(this).val();
   $.ajax({
     url: 'check/checkuser.php',
    method: "POST",
    data: {username:username},
    dataType: "text",
    success: function (data){
      $("#userstatus").html(data);
    }

   });

 });


$('#name').keyup(function (){

  var name = $(this).val();


    if (name !== ''){
     $.ajax({
      url: "check/checktext.php",
      method: 'POST',
      data: {name: name},
      dataType: "text",
      success: function (data){
          $("#textstatus").fadeIn();
       $('#textstatus').html(data);
      }

     })
    }



})

    $(document).on('click', 'li', function (){
        $('#name').val($(this).text());
        $('#textstatus').fadeOut();
    })

});