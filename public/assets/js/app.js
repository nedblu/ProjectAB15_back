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

	$('[data-toggle="popover"]').popover();

	$('input[name=publish').on('click', function(){
		var value = $('input[name=publish]:checked').val();
		if (value == 0)
		{
			$('textarea[name=body').prop( "disabled", true );
			$('textarea[name=body').prop( "required", false );
		}
		else
		{
			$('textarea[name=body').prop( "disabled", false );
			$('textarea[name=body').prop( "required", true );
		}
	});

	/*$('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 300,
        itemMargin: 5,
    	directionNav: false
    });

    var token = $('.token').attr('data-token');
    var baseURL = window.location.href;

	Dropzone.autoDiscover = false;
	var myDropzone = new Dropzone("#dropzoneFileUpload", {
		url: baseURL + "/upload",
		params: {
			_token: token
		}
	});
	
	Dropzone.options.myAwesomeDropzone = {
		paramName: "file", // The name that will be used to transfer the file
		maxFilesize: 2, // MB
		addRemoveLinks: true,
		accept: function(file, done) {
			
		},
	};*/

});