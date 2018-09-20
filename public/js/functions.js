function populate_popup(header, body, link, confirm_callback, cancel_callback) {
	let modal = $('.modal');
	modal.find('.modal-header p').html(header);
	modal.find('.modal-body p').html(body);
	modal.find('.modal-footer a.modal-confirm-btn').attr('href', link);
	modal.show();

	if (typeof confirm_callback === 'function') {
		$('.modal').find('.modal-confirm-btn').on('click', function(){
			confirm_callback();
		});
	}

	if (typeof cancel_callback === 'function') {
		$('.modal').find('.modal-close-btn').on('click', function(){
			cancel_callback();
		});
	} else {
		$('.modal').find('.modal-close-btn').on('click', function(){
			close_popup(modal);
		});
	}
}
function close_popup(modal) {
	modal.fadeOut();
}
String.prototype.capitalize = function() {
	return this.charAt(0).toUpperCase() + this.slice(1);
}
