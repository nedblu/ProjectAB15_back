$(document).ready(function() {

	$('.navbar-toggle-sidebar').click(function () {
		$('.navbar-nav').toggleClass('slide-in');
		$('.side-body').toggleClass('body-slide-in');
		$('#search').removeClass('in').addClass('collapse').slideUp(200);
	});

	$('#search-trigger').click(function () {
		$('.navbar-nav').removeClass('slide-in');
		$('.side-body').removeClass('body-slide-in');
		$('.search-input').focus();
	});
  
	$('#confirmDelete').on('show.bs.modal', function (e) {

		$message = $(e.relatedTarget).attr('data-message');
		$(this).find('.modal-body p').html($message);
		$title = $(e.relatedTarget).attr('data-title');
		$(this).find('.modal-title').text($title);

		var form = $(e.relatedTarget).closest('form');

		$(this).find('.modal-footer #confirm').data('form', form);

	});

	$('#confirmDelete').find('.modal-footer #confirm').on('click', function(){

		$(this).data('form').submit();

	});


});