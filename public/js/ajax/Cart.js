$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
	// Add Cart
	$(document).on("click", "#orderItem a", function() {
		var id = $(this).attr('id');
		var sl = $('#sl'+id).val();
		$.post('http://localhost:8000/addCart', {
			id: id,
			sl: sl
		}, function(data) {
			$("span#slSP").html(data[1]);
			alert("Sản phẩm " + data[0] + " đã thêm vào giỏ hàng");
		});
	});
	// Add cart home || product 
	$(document).on("click", "a#buy", function(event) {
		event.preventDefault();
		var id = $(this).attr('class');
		$.post('http://localhost:8000/addCart', {
			id: id,
			sl: 1
		}, function(data) {
			$("span#slSP").html(data[1]);
			alert("Sản phẩm " + data[0] + " đã thêm vào giỏ hàng");
		});
	});
	// Delete Cart
	$(document).on('click', ".delete-cart", function (event) {
		event.preventDefault();
		var id = $(this).attr('id');
		var button = $(this);
		$.post('gio-hang/'+id, {
		    _method : 'DELETE',
			id: id
		}, function(data, status) {
			button.closest('tr').remove();
			$('.total-pri').html(data);

		});
	});
	//Update Cart
	$(document).on('click',".update-cart", function (event) {
		event.preventDefault();
		var id = $(this).attr('id');
		var sl = $('#sl'+id).val();
		var button = $(this);
		$.post('gio-hang/'+id, {
		    _method : 'PUT',
			sl: sl
		}, function(data) {
			button.parent().parent().find("b#item-price").html(data[0] + " Đ");
			$('.total-pri').html(data[1]);
		});
	});
});