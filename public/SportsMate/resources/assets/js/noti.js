///////////////////////////// start get new noti if exist /////////////////////
function newNotiCount() {
    var userId = $('meta[name=dash]').attr('content');
    let token = $('meta[name=csrf-token]').attr('content');
    var count = $("input[name=temp]").val();
    console.log(count);
    $.ajax({
        type: 'POST',
        url: '/newNotiCount',

        data: {
            _token: token,
            userId: userId,
            count: count,
        },
        success: function (data) {
            if (data.status == 'true') {
                //$('#notiLoop').load('/getNoti').fadeIn('slow');
                $('#notiPlace').load('/getNoti').fadeIn('slow');
                
                $("input[name=temp]").val(data.count);
                console.log($("input[name=temp]").val()) ;
                $("#noti-count").html(data.count);
                if (data.unreadNoti > 0) {
                    console.log('data.unreadNoti' + data.unreadNoti)
                    $("#noti-count").html(data.unreadNoti);
                } else {
                    $("#noti-count").hide();
                }
                var NotiAudio = $('#NotiAudio');
	            NotiAudio[0].play();
                console.log('new notification' + unreadNoti);
            } else {
                console.log('no new notification');
            }
        }
    });
}
$(document).ready(function () {

setInterval(newNotiCount, 10000);
});
///////////////////////////// end get new noti if exist /////////////////////
/////////////////////////////// start delete all ///////////////////////////
$(document).on('click', ".noti_delete_all", function (e) {
    e.stopPropagation();
    console.log('delete all') ;
    var userId = $('meta[name=dash]').attr('content');
    let token = $('meta[name=csrf-token]').attr('content');
    var count = $("input[name=temp]").val();
    console.log(count);
    $.ajax({
        type: 'POST',
        url: '/deleteAllNoti',

        data: {
            _token: token,
            userId: userId,
        },
        success: function (data) {
            if (data.status == 'deleted') {
                $('#notiPlace').load('/getNoti').fadeIn('slow');
                $("input[name=temp]").val(data.count);
                console.log($("input[name=temp]").val());
                if (data.unreadNoti > 0) {
                    $("#noti-count").html(data.unreadNoti);
                } else {
                    $("#noti-count").hide();
                }

            } else {
                console.log('no new notification');
            }
        }
    });
    console.log('delete all');
    
});
/////////////////////////////// end delete all ///////////////////////////
/////////////////////////////// start all as read ///////////////////////////
$(document).on('click', ".noti_all_as-read", function (e) {
    e.stopPropagation();
    var userId = $('meta[name=dash]').attr('content');
    let token = $('meta[name=csrf-token]').attr('content');
    var count = $("input[name=temp]").val();
    console.log(count);
    $.ajax({
        type: 'POST',
        url: '/markAllAsReadNoti',

        data: {
            _token: token,
            userId: userId,
        },
        success: function (data) {
            if (data.status == 'all_marked_as_read') {
                $('#notiPlace').load('/getNoti').fadeIn('slow');
                $("input[name=temp]").val(data.count);
                console.log($("input[name=temp]").val());
                if (data.unreadNoti > 0) {
                    $("#noti-count").html(data.unreadNoti);
                } else {
                    $("#noti-count").hide();
                }
            } else {
                console.log('no new notification');
            }
        }
    });
    console.log('delete all');

});
/////////////////////////////// end all as read ///////////////////////////
/////////////////////////////// start delete one noti ///////////////////////////
$(document).on('click', ".noti_delete", function (e) {
    e.stopPropagation();
    var id = $(this).attr('id');
    var noti = id.replace('_delete', '')
    var userId = $('meta[name=dash]').attr('content');
    let token = $('meta[name=csrf-token]').attr('content');
    var count = $("input[name=temp]").val();
    console.log(count);
    $.ajax({
        type: 'POST',
        url: '/deleteNoti',

        data: {
            _token: token,
            userId: userId,
            count: count,
            noti: noti,
        },
        success: function (data) {
            if (data.status == 'deleted') {
                $('#notiPlace').load('/getNoti').fadeIn('slow');
                $("input[name=temp]").val(data.count);
                console.log($("input[name=temp]").val());
                if (data.unreadNoti > 0) {
                    $("#noti-count").html(data.unreadNoti);
                } else {
                    $("#noti-count").hide();
                }
                
            } else {
                console.log('no new notification');
            }
        }
    });

});
/////////////////////////////// end delete one noti ///////////////////////////
/////////////////////////////// start as read one noti ///////////////////////////
$(document).on('click', ".noti_as-read", function (e) {
    e.stopPropagation();
    var id = $(this).attr('id');
    var noti = id.replace('_noti_as-read', '');
    var userId = $('meta[name=dash]').attr('content');
    let token = $('meta[name=csrf-token]').attr('content');
    var count = $("input[name=temp]").val();
    console.log(count);
    $.ajax({
        type: 'POST',
        url: '/markAsReadNoti',

        data: {
            _token: token,
            userId: userId,
            count: count,
            noti: noti,
        },
        success: function (data) {
            if (data.status == 'marked_as_read') {
                //$('#notiLoop').load('/getNoti').fadeIn('slow');
                $('#notiPlace').load('/getNoti').fadeIn('slow'); 
                $("input[name=temp]").val(data.count);
                console.log($("input[name=temp]").val());
                if (data.unreadNoti > 0) {
                    $("#noti-count").html(data.unreadNoti);
                } else {
                    $("#noti-count").hide();
                }
            } else {
                console.log('no new notification');
            }
        }
    });
    console.log('delete all');


});
//////////////////////////////// end as read one noti ////////////////////////////
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/* $(document).ready(function () {
    var notification = [];
    var userId = $('meta[name=dash]').attr('content');
    console.log(userId);
     Echo.private('App.Model.User.' + userId)
         .notification((notification) => {
             notification = notification;
             console.log(notification);
             console.log(userId);
         });

    
}); */

//window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/*Vue.component('example', require('./components/Example.vue'));
*/
/* const app = new Vue({
    el: '#app',
    data: {
        notification:'',
    },
    mounted(){
        var userId = $('meta[name=dash]').attr('content');
        console.log(userId);
        Echo.private('App.Model.User.' + userId)
            .notification((notification) => {
                notification = notification ;
                console.log(notification);
            });
    }

}); */
