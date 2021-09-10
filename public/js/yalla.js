
$(document).ready(function () {
//referesh notification
    setInterval(function () {
        $.ajax({
            url: "/matrimonial/admin/get/notification",
            type: "get",
            success: function (data) {
                console.log(data[0].data.url);
                console.log(data[0].url);
                $('#message').replaceWith(' <ul class="timeline" id="message"></ul>');
                for (var i=0; i < data.length; i++){
                    $('#message').append(' <li><div class="timeline-panel"><div class="media mr-2"><i class="fas fa fa-bell"></i></div><a href='+ data[i].data.url +'><div class="media-body"><h6 class="mb-1">'+ data[i].data.title +'</h6><small class="d-block">'+ data[i].created_at +'</small></div></a></div></li>')
                }
            }
        });
    }, 5000);
});

//mark all as read
$(document).on('click', '#markAsRead', function (e) {
    e.preventDefault();
    $.ajax({
        type: "get",
        url: "/matrimonial/admin/mark/read/notification",
        success: function (data) {
            $('#message li').hide();
        }
    });
});
