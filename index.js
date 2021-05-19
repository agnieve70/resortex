$(document).ready(function(){
    const base_url = window.location.origin;

    $.ajax({
        url:`${base_url}/ajaxCalls/getLocations.php`,
        method:`get`,
        dataType: `json`,
        success: function(data)
        {
            html = ``;
            for(let i=0; i<data.length; i++)
            {
                html+= `<option value="${data[i].location_id}">${data[i].location}</option>`;
            }

            $('#cityInput').html(html);
        },
        error: function(error)
        {
            console.log(error);
        }
    });

    $('#btnLoadResorts').click(function()
    {
        window.location.href=`${base_url}/resorts.php?id=${$('#cityInput').val()}`;
    });
});