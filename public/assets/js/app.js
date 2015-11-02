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

	/*
	 * Dates of the system
	 */

	moment.locale('es');
	
    var dateWithId = moment($('#created_at').attr('datetime'));
    $('#created_at').attr( 'title', dateWithId.format('LLLL') );
    $('#created_at').text( dateWithId.fromNow() );

    $(".created_at").each(function(){
       	var $el = $(this);
       	var date = $el.attr("datetime");
		$el.text(moment(date).fromNow());
		$el.attr('title', moment(date).format("LLLL"));
    });

    var dateWithId = moment($('#updated_at').attr('datetime'));
    $('#updated_at').attr( 'title', dateWithId.format('LLLL') );
    $('#updated_at').text( dateWithId.fromNow() );

    $(".updated_at").each(function(){
       	var $el = $(this);
       	var date = $el.attr("datetime");
		$el.text(moment(date).fromNow());
		$el.attr('title', moment(date).format("LLLL"));
    });

});