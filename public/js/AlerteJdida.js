var Messages = (function() {
    var Messages = {};

    function messagesWrapper() {
        $(document.body).append('<div class="messages-wrapper"></div>');
    }

    function messageTpl(id, status, message) {
        var html = '<div id="message-' + id + '" class="message"><div class="alert alert-' + status + ' alert-dismissible">';
        html += '<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>';
        html += message;
        html += '</div></div>';
        return html;
    }

    function showMessage(status, message) {
        var wrapper = $('.messages-wrapper').get(0);

        if (!wrapper) {
            messagesWrapper();
        }

        var id = getRandomInt();
        var html = messageTpl(id, status, message);

        $(".messages-wrapper").prepend(html);
        //$('#message-' + id).animate({opacity: 1}, 300);
        $('#message-' + id).addClass('show');
        $('#message-' + id).velocity("slideDown", { duration: 300 });

        window.setTimeout(function() {
            //$('#message-' + id).animate({opacity: 0}, 300, function() {
            //$('#message-' + id).remove();
            //});
            $('#message-' + id).velocity("fadeOut", { duration: 500, complete: function() {
                    $('#message-' + id).removeClass('show');
                    $('#message-' + id).remove();
                }});
        }, 3000);
    }

    function getRandomInt() {
        return Math.floor(Math.random() * (100 - 0)) + 0;
    }

    Messages.info = function(message) {
        showMessage('info', message);
    }

    Messages.success = function(message) {
        showMessage('success', message);
    }

    Messages.warning = function(message) {
        showMessage('warning', message);
    }

    Messages.danger = function(message) {
        showMessage('danger', message);
    }

    Messages.showServerMessages = function() {
        $('.messages-server-wrapper .alert').each(function(i) {
            if ($(this).is('.alert-info')) {
                Messages.info($(this).text());
            } else if ($(this).is('.alert-success')) {
                Messages.success($(this).text());
            } else if ($(this).is('.alert-warning')) {
                Messages.warning($(this).text());
            } else if ($(this).is('.alert-danger')) {
                Messages.danger($(this).text());
            }
        });
    }

    return Messages;
}());

$('.show-info').click(function() {
    Messages.info('Info!');
});

$('.show-success').click(function() {
    Messages.success('Success!');
});

$('.show-warning').click(function() {
    Messages.warning('Warning!');
});

$('.show-danger').click(function() {
    Messages.danger('Danger!');
});

Messages.showServerMessages();