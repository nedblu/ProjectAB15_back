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

    var created_at = moment($('#created_at').attr('datetime'));
    $('#created_at').attr( 'title', created_at.format('LLLL') );
    $('#created_at').text( created_at.fromNow() );

    $(".created_at").each(function(){
        var $el = $(this);
        var date = $el.attr("datetime");
        $el.text(moment(date).fromNow());
        $el.attr('title', moment(date).format("LLLL"));
    });

    var updated_at = moment($('#updated_at').attr('datetime'));
    $('#updated_at').attr( 'title', updated_at.format('LLLL') );
    $('#updated_at').text( updated_at.fromNow() );

    $(".updated_at").each(function(){
        var $el = $(this);
        var date = $el.attr("datetime");
        $el.text(moment(date).fromNow());
        $el.attr('title', moment(date).format("LLLL"));
    });

    $('#category_name').keyup(function(event){
        var name = $(this).val();
        $('#category_slug').val(string_to_slug(name));
    });

    function string_to_slug(str) {

        str = str.replace(/^\s+|\s+$/g, '');
        str = str.toLowerCase();

        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to   = "aaaaeeeeiiiioooouuuunc------";

        for (var i=0, l=from.length; i<l ; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
    }

    /*******************************
    *       NEW PRODUCT APP        *
    ********************************/

    $('#checkColors').bind('change', function () {

        if ($(this).is(':checked')) { 
            $("#colors").prop('disabled', false).prop('required', true);
            $('ul.token-input-list-facebook').removeClass('token-input-list-disabled-facebook').css("pointer-events", "auto");
            $("#token-input-colors").prop('disabled', false);
        } else {
            $("#colors").prop('disabled', true).prop('required', false);
            $('ul.token-input-list-facebook').addClass('token-input-list-disabled-facebook').css("pointer-events", "none");
            $("#token-input-colors").prop('disabled', true);
        }

    });

    $('#checkInks').bind('change', function () {

        ($(this).is(':checked')) ? $("#inks").prop('disabled', false).prop('required', true) : $("#inks").prop('disabled', true).prop('required', false);

    });

    $('#checkEquipment').bind('change', function () {

        ($(this).is(':checked')) ? $("#equipments").prop('disabled', false).prop('required', true) : $("#equipments").prop('disabled', true).prop('required', false);

    });

});