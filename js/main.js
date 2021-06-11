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

    // Auto Refresh Content
    $('#autoSubmit').click(function (){
        var body = $('#body').val();
        if ($.trim(body) != ''){
            $.ajax({
                url: "check/autorefresh.php",
                method: 'POST',
                data: {body: body},
                dataType: "text",
                success: function (data){
                    $('#body').val('');
                }
            })
            return false;
        }
    });
    // Load data
    setInterval(function (){
        $('#loadData').load('check/loadcontent.php').fadeIn();
    }, 1000);

    $('#keywordP').keyup(function (){
        var keyword = $(this).val();

        if (keyword != ''){
            $.ajax({
                url     : 'check/checksearch.php',
                method  : 'post',
                data    : {name:keyword},
                dataType: 'text',
                success : function (data){
                    $('#KeywordData').html(data);
                }
            });
        }
    });

    // Auto Save
    function autoSave(){
        var content = $('#content').val();
        var contentId = $('#contentId').val();

        if (content != ''){
            $.ajax({
                url     : 'check/autosave.php',
                method  : 'post',
                data    : {content:content, contentId:contentId},
                dataType: 'text',
                success : function (data){
                    if (data != ''){
                        $('#contentId').val(data);
                    }
                    $("#statusSave").text("Content save as draft..");
                    setInterval(function (){
                        $("#statusSave").text("");
                    }, 3000);
                }
            });
        }

    }
    setInterval(function (){
        autoSave();
    }, 5000);

});