
$(document).ready(function () {
    
    $('#loginBtn').on('click',function(e){
        e.preventDefault();
        if(checkRequire()){
        username=$("#username");
        password=$("#password");
            login(username.val(),password.val());
        }
       
    });


    var checkRequire=function(){
    flag=true;
    $('input').removeClass('error');
  $.each($('.require'), function (index, elem) { 
       if($(elem).val()==""){
           flag=false;
           $(elem).addClass('error');
       }
  });

    return flag;
}
var login=function(username,password){
    $.ajax({
    type: "post",
    url: "/login/",
    data:{
        "web":"1",
        "_token": $('#token').val(),
        "data": {"username":username,"password":password}
        },
    dataType: "JSON",
    success: function (response) {
        style="error";
        status="Error";
        console.log(response);
        if(response.status){
            style="notice";
            status="Success";
            // resetForm();
        }
        showNotification(response.message,status,style);
        if(response.status){
            window.location.href = "/";
        }
    },error: function (xhr, ajaxOptions, thrownError) {
        console.log(xhr.status);
        console.log(xhr.responseText);
      }
});
}


var showNotification=function(msg,title,style,size="medium"){
    $.growl({ 
        title: title, 
        message: msg,
        style:style,
        size: size,
        duration: 3200,
        close: "&#215;",
        location: "default",
        delayOnHover: true,
        namespace: 'growl',
        fixed: false
    });
   }
});
