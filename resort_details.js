$(document).ready(function(){
    const base_url = window.location.origin;
    $.ajax({
        url: `${base_url}/ajaxCalls/getResortDetails.php?id=${$('#id').text()}`,
        method:`get`,
        dataType: `json`,
        success: function(data)
        {
            let html = ``;
            html = `
            
            <div class="container">
                <br>
                <img class="text-center" src="${base_url}/images/${data[0].resort_img}" alt="">
                <br><br>
                <a href="resorts.php?id=${data[0].location_id}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                <h3>${data[0].resort}</h3>
                <p>${data[0].description}</p>
                <br>

                <div class="alert alert-dismissible alert-primary">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Be a Member!</strong> <a href="login.php" class="alert-link">Click Here</a> to login and make reserves in this resort.
                </div>
            </div>
            `;
            $('#content').html(html);
        },
        error: function(error)
        {
            alert("erroir");
            console.log(error);
        }
    });
})


