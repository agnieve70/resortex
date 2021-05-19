$(document).ready(function(){

    const base_url = window.location.origin;

    $('#loginUser').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: `${base_url}/ajaxCalls/loginUser.php`,
            data: $(this).serialize(),
            dataType: 'json',
            method: 'post',
            success: function(data)
            {
               if(data.success)
               {
                    swal({
                        title: "Success!",
                        text: data.success,
                        icon: "success",
                        button: "Confirm",
                    }).then(() => {
                        window.location.href=`${base_url}/user_dashboard.php`
                    });
               }
               else
               {
                swal({
                    title: "Error!",
                    text: data.error,
                    icon: "error",
                    button: "Try Again",
                }).then(() => {
                    window.location.href=`${base_url}/login.php`
                });
               }
                console.log("success",data);
            },
            error: function(error)
            {
                console.log("error",error);
            }
        });
    });

    $('#signupForm').submit(function(e)
    {
        e.preventDefault();
        $.ajax({
            url: `${base_url}/ajaxCalls/signupUser.php`,
            method: 'post',
            data: $(this).serialize(),
            dataType: 'json',
            success:function(data)
            {
                console.log("success", data);
                swal({
                    title: "Success!",
                    text: data.success,
                    icon: "success",
                    button: "Confirm",
                }).then(() => {
                    window.location.href=`${base_url}/login.php`
                });
            },
            error: function(error)
            {
                swal({
                    title: "Error!",
                    text: error.error,
                    icon: "warning",
                    button: "Confirm",
                });
                console.log("error", error);
            }
        });
    });

});