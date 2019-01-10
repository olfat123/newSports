/////////////////////////////////////////////////////////////////////////////////
////////////////////start of update main profile info/////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
$(document).on('click', "#sendemail", function (e) {    
    e.preventDefault();
    var errors = 0;

    var message_name = $("input[name=message_name]").val();

    if (message_name.replace(/\s/g, "") === "") {

        errors = 1;
        $("input[name=message_name]").css({
            border: '2px solid #e80f0f',
            background: '#f7e7e7'
        });

    } else {
        $("input[name=message_name]").css({
            border: '2px solid #5cb85c',
            background: '#b2e8b2'
        });
    }

    var message_email = $("input[name=message_email]").val();
    
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    console.log(re.test(String(message_email).toLowerCase()));

    if (message_email.replace(/\s/g, "") === "" || re.test(String(message_email).toLowerCase()) === false) {

        errors = 1;
        $("input[name=message_email]").css({
            border: '2px solid #e80f0f',
            background: '#f7e7e7'
        });

    } else {
        $("input[name=message_email]").css({
            border: '2px solid #5cb85c',
            background: '#b2e8b2'
        });
    }

    var message_subject = $("input[name=message_subject]").val();

    if (message_subject.replace(/\s/g, "") === "") {

        errors = 1;
        $("input[name=message_subject]").css({
            border: '2px solid #e80f0f',
            background: '#f7e7e7'
        });

    } else {
        $("input[name=message_subject]").css({
            border: '2px solid #5cb85c',
            background: '#b2e8b2'
        });
    }

    var message_subject = $("input[name=message_subject]").val();

    if (message_subject.replace(/\s/g, "") === "") {

        errors = 1;
        $("input[name=message_subject]").css({
            border: '2px solid #e80f0f',
            background: '#f7e7e7'
        });

    } else {
        $("input[name=message_subject]").css({
            border: '2px solid #5cb85c',
            background: '#b2e8b2'
        });
    }

    var message_message = $.trim($("#message_message").val());

    if (message_message.replace(/\s/g, "") === "") {

        errors = 1;
        $("#message_message").css({
            border: '2px solid #e80f0f',
            background: '#f7e7e7'
        });

    } else {
        $("#message_message").css({
            border: '2px solid #5cb85c',
            background: '#b2e8b2'
        });
    }

    if (errors === 0) {
        $('#sendemailLoader').fadeIn();

        $("input[name=message_name]").css({
            border: '2px solid #5cb85c',
            background: '#b2e8b2'
        });
        $("input[name=message_email]").css({
            border: '2px solid #5cb85c',
            background: '#b2e8b2'
        });
        $("input[name=message_subject]").css({
            border: '2px solid #5cb85c',
            background: '#b2e8b2'
        });
        $("#message_message").css({
            border: '2px solid #5cb85c',
            background: '#b2e8b2'
        });
        
        var _token = $("input[name=_token]").val();
        $.ajax({
            type: 'POST',
            url: '/contactus',

            data: {
                //playerId: playerId,
                _token: _token,
                name: message_name,
                email: message_email,
                subject: message_subject,
                E_message: message_message,
            },
            success: function (data) {
                console.log(data);
                if (data === 'true') {
                    //alert('sendded') ;
                    $('#sendemailLoader').fadeOut();
                    setTimeout(function () {
                        $('#contactSuccess').fadeIn();
                    }, 1000);
                    setTimeout(function () {
                        $('#contactSuccess').fadeOut();
                    }, 5000);
                } else if (data === 'false') {
                    //alert('error');
                    $('#sendemailLoader').fadeOut();
                    setTimeout(function () {
                        $('#contactError').fadeIn();
                    }, 1000);
                    setTimeout(function () {
                        $('#contactError').fadeOut();
                    }, 5000);
                }


            }
        });

    } else {

    }

});
/////////////////////////////////////////////////////////////////////////////////
////////////////////end of update main profile info/////////////////////////////
/////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////
////////////////////start of player attach Sport/////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
/* var myEventsLoader = $("#myEventsloader");
myEventsLoader.show();
$("#myEventsResult").css("filter", "blur(2px)");
var data = {};

var message_name_ele = $("input[type=text][name=message_name]");
var message_name_in = message_name_ele.val();
if (message_name_in !== null && message_name_in !== "" && message_name_in.replace(/\s/g, "") !== "") {
    var message = message_name_in;
    data['message'] = message;
} else {
    message_name_ele.css("border", "1px solid #ddd")
}
var message_email_ele = $("input[type=email][name=message_email]");
var message_email_in = message_email_ele.val();
if (message_email_in !== null && message_email_in !== "" && message_email_in.replace(/\s/g, "") !== "") {
    var message = message_email_in;
    data['email'] = email;
} else {
    message_email_ele.css("border", "1px solid #ddd")
}
var message_subject_ele = $("input[type=text][name=message_subject]");
var message_subject_in = message_subject_ele.val();
if (message_subject_in !== null && message_subject_in !== "" && message_subject_in.replace(/\s/g, "") !== "") {
    var subject = message_subject_in;
    data['subject'] = subject;
} else {
    message_subject_ele.css("border", "1px solid #ddd")
}
var message_subject_ele = $("input[type=text][name=message_subject]");
var message_subject_in = message_subject_ele.val();
if (message_subject_in !== null && message_subject_in !== "" && message_subject_in.replace(/\s/g, "") !== "") {
    var subject = message_subject_in;
    data['subject'] = subject;
} else {
    message_subject_ele.css("border", "1px solid #ddd")
} */