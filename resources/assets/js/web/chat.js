export default class {
	init() {
		this.toggleChat();
		this.sendMsg();
	}

	sendMsg() {
		$('#message-send').click(function(event) {
			var msgContent = $('.message-content').val();
			$.post($('#message-send').data('url'), 
				{
					msgContent: msgContent
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