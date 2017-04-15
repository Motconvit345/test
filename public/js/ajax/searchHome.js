$(document).ready(function() {
	$('#seach-header').on('keyup', '#search', function () {
		var textSearch = $(this).val();
		$.post('/ajaxSearchHome', 
			{
				textSearch: textSearch
			}, 
			function(data) {
				$("ul#resul-search").html(data);
		});
	});
	$("#seach-header").mouseover(function(){
        $("ul#resul-search").show();
    });

	$("#seach-header").mouseout(function(){
        $("ul#resul-search").hide();
    });
});