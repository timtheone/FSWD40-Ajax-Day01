$("#user_name").keyup( ()=> {
    let x = $("#user_name").val();
    $.post($("#reg").attr("action"), // fetch the URL from myForm
    $("#reg :input").serializeArray(), // serialize the data from the input fields, creating an array of objects (name and value pairs)
    function(info){ $("#message").html(info); // append the response to element with id of message
    });
});