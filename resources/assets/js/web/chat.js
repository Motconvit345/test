export default class {
	init() {
		this.toggleChat();
		this.sendMsg();
		this.listEvent();
	}

	sendMsg() {
		$('#message-send').click(function(event) {
			var msgContent = $('.message-content').val();
			var roomId = $('#message-send').data('room');
			$.post($('#message-send').data('url'), 
				{
					msgContent: msgContent,
					roomId : roomId
				}, 
				function(data) {
					$('.message-content').val('');
				}
			);
		});
	}

	listEvent() {
		var html = '';
		var boxChat = $('.box-chat');
		Echo.join('chatroom.' + $('#message-send').data('room'))
            .listen('ChatPosted', (e) => {
            	if ($('#message-send').data('room') == e.user.id) {
            		html = html + '<div class="guest">';
            	} else {
            		html = html + '<div class="guest">';
            	}
            	
            	html = html + '<span class="message">' + e.msg.content + '</span>';
            	html = html + '<br>';
            	html = html + '<span class="author-message"><b>' + e.user.name + '</b></span>';
            	html = html + '</div>';
            	$('.box-chat').append(html);
            	boxChat[0].scrollTop = boxChat[0].scrollHeight;
            });
	}

	toggleChat() {
		$('#close-chat').click(function (event) {
			$('#home-frame-chat').hide();
			$('#msg-off h3').show();
		});

		$('#msg-off a').click(function(event) {
			$(this).parent().hide();
			$('#home-frame-chat').show();
		});
	}
}