
$(document).ready(function () {

    tablename=$('#table').val();
    index=$('#index').val();

    


    $('#saveBtn').on('click',function(e){
        e.preventDefault();
        formData();

       
    });


    var checkRequire=function(){
    error=false;
    $('.error').removeClass('error');
  $.each($('.require'), function (index, elem) { 
       if($(elem).val()==""){
           error=true;
           $(elem).addClass('error');
       }
  });

    return error;
}


var formData = function() {
    var data = {};
    error = checkRequire();
    if(!error){
        var form_data = new FormData();
        
        $.each($('.form'), function(k, v) {
            key = $(v).attr('name');
            value = $(v).val();
            if (value == "") {
                $(v).addClass('error');
                error = true;
            }
            data[key] = value;
        });
        
        form_data.append('data', JSON.stringify(data));
        form_data.append('_token', $('#token').val());
        form_data.append('web', '1');
        form_data.append('table', tablename);
        form_data.append('index', index);
        var photos=$('#photo')[0].files;
        if(photos.length>0){

            $(photos).each(function (index, element) {
                form_data.append("files[]", element);  
            });
        }
    
        saveData(form_data);
    }
    else{
        showNotification("Complete The Form","Error","error");
    }  


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








var saveData=function(data){
    console.log(data);
    $.ajax({
    type: "post",
    url: "/insert",
    contentType: false,
    processData: false,  
    data:data,

    success: function (response) {
        style="error";
        status="Error";
        console.log(response);
        if(response.status){
            style="notice";
            status="Saved";
            resetForm();
        }
        showNotification(response.message,status,style);

        // window.location.href = "/";
    },error: function (xhr, ajaxOptions, thrownError) {
        console.log(xhr.status);
        console.log(xhr.responseText);
        showNotification(xhr.responseText,"Error","error");

      }
});
}

var resetForm=function(){
    $.each($('.form'), function (index, elem) { 
        $(elem).val('');
   });
   $('#photo').val('');
}
});
