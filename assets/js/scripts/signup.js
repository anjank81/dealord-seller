$('#jk').click( function() {
    var first_name = $("input[name=first_name]").val();
    var last_name = $("input[name=last_name]").val();
    var username = $("input[name=username]").val();
    var password = $("input[name=password]").val();
    var password_confirm = $("input[name=password_confirm]").val();
     // alert(first_name);
    var data = {
        "first_name": first_name,
        "last_name": last_name,
        "username": username,
        "password": password,
        "password_confirm": password_confirm
    };

    $.ajax({
        "async": true,
        "crossDomain": true,
        "url": 'http://api.dealord.com/api/v1/accounts/register/',
        "method": "POST",
        "dataType": "json",
        "data": JSON.stringify(data),
        "contentType": "application/json",
        success: function (data) {
            console.log(data);
        },
        error(){
            console.log("Encountered an error");
        }
    });
});

$('#login').click( function() {

    var username = $("input[name=username]").val();
    var password = $("input[name=password]").val();
    // alert(first_name);
    var data = {
        "login": username,
        "password": password,
    };

    $.ajax({
        "async": true,
        "crossDomain": true,
        "url": 'http://api.dealord.com/api/v1/accounts/login/',
        "method": "POST",
        "dataType": "json",
        "data": JSON.stringify(data),
        "contentType": "application/json",
        success: function (data,status,xhr) {
            console.log(data);
            console.log(xhr.getAllResponseHeaders());
        },
        error(){
            console.log("Encountered an error");
        }
    });
});