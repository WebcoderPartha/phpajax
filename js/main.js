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



});

    $(document).on('click', 'li', function (){
        $('#name').val($(this).text());
        $('#textstatus').fadeOut();
    });

    // $(document).onclick('click', 'li', function (){
    //     $('#name').val($(this).text());
    //     $('#textstatus').fadeOut();
    // })


    // Password
    $('#btnPassword').on('click',function (){
        var password = $('#password');
        var fieldtype = password.attr('type');

        if (fieldtype == 'password'){
            $('#password').attr('type', 'text');
            $(this).text('Hide Password');
        }else{
            $('#password').attr('type', 'password');
            $(this).text('Show Password');
        }

    })
    // $('#btnPassword').on('click',function (){
    //     var password = $('#password');
    //     var fieldtype = password.attr('type');
    //
    //     if (fieldtype == 'password'){
    //         password.attr('type', 'text');
    //         $(this).text('Hide Password');
    //     }else{
    //         password.attr('type', 'password');
    //         $(this).text('Show Password');
    //     }
    //
    // })



});