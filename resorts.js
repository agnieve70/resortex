$(document).ready(function(){
    const base_url = window.location.origin;
    $.ajax({
        url: `${base_url}/ajaxCalls/getResorts.php?id=${$('#id').text()}`,
        method:`get`,
        dataType: `json`,
        success: function(data)
        {
            let html = ``;
            for(let i = 0; i < data.length; i++)
            {
                html += `
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                        <h4 class=""><a href="resort_details.php?id=${data[i].resort_id}">${data[i].resort}</a></h4>
                        <a href="resort_details.php?id=${data[i].resort_id}"> 
                        <img width="100%" height="200px" class="" src="${base_url}/images/${data[i].resort_img}" />
                        </a>
                        </div>
                        <div class="card-body">
                        <p class="card-text">${data[i].description}</p>
                        </div>
                    </div>
                </div>
                `;
            }
            $('#content').html(html);
        },
        error: function(error)
        {
            alert("error");
            console.log(error);
        }
    });
})