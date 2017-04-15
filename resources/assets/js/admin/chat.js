export default class {
	init() {
		this.toggleChat();
		this.sendMsg();
	}

	listenMsg() {
		Echo.join('chat.'+1)
	
		    .listen('MessagePosted', (e) => {
		    	console.log(e);
		    });
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

				}
			);
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