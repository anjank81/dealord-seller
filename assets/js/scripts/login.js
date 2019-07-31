$('#login').click( function() {
    var csrf_token = '<%= token_value %>';
    var data= {
            "login": "admin",
            "password": "Q1w2e3r4t5@#"
        };
    $.ajax({
        method: 'POST',
        // dataType: "multipart/form-data",
        // url: "http://api.dealord.com/api-token-auth/",
        url: "http://api.dealord.com/api/v1/accounts/login/",
        contentType: "application/json; charset=utf-8\"",
        crossDomain: true,
        data: JSON.stringify(data),
        // headers: {
        //     'Accept': 'text/html; q=1.0, */*',
        //     'Accept-Charset': 'ISO-8859-1,utf-8;q=0.7,*;q=0.3',
        //     'Accept-Encoding': 'gzip, deflate, sdch',
        //     'X-Requested-With': 'XMLHttpRequest',
        //     'Accept-Language': 'en-US,en;q=0.8',
        //     'Connection': 'keep-alive',
        //     'Host':'api.dealord.com',
        //     // 'withCredentials': true
        // "Authorization": "Token 7cdb67792987171bb0fea78751462841ea352e04",
        // },
        success: function(resp) {
            console.log(resp);
        },
        error: function(resp) {
            console.error(resp);
        }
    });

    $.ajax({
        method: 'GET',
        url: "http://api.dealord.com/api/v1/accounts/profile/",
        contentType: "application/json; charset=utf-8\"",
        crossDomain: true,
        headers: {
        //     'Accept': 'text/html; q=1.0, */*',
        //     'Accept-Charset': 'ISO-8859-1,utf-8;q=0.7,*;q=0.3',
        //     'Accept-Encoding': 'gzip, deflate, sdch',
        //     'X-Requested-With': 'XMLHttpRequest',
        //     'Accept-Language': 'en-US,en;q=0.8',
        //     'Connection': 'keep-alive',
        //     'Host':'api.dealord.com',
        //     // 'withCredentials': true
            "Authorization": "Token 7cdb67792987171bb0fea78751462841ea352e04",
        },
        success: function(resp) {
            console.log(resp);
        },
        error: function(resp) {
            console.error(resp);
        }
    });

});