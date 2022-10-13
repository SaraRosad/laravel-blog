$("#add-form").on("submit",function (e)
{
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax(
    {
        type:'post',
        url:'user/add-post/',
        data:formData,
        beforeSend:function()
        {
            launchpreloader();
        },
        complete:function()
        {
            stopPreloader();
        },
        success:function(result)
        {
             alert(result);
        }
    });
});
