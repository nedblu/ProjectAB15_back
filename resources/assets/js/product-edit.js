$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var JSONresponse = document.location.href + "/../../../colors/json";
    var URLassets = document.location.href + "/../../../assets/content_application/colors/";

    var url = document.location.href.split('/');
    var JSONresponseProd = document.location.href + "/../../../colors/product/json";
    var productID = url[url.length - 1];

    if ($('#checkColors').is(':checked')) {
        $.ajax({
            url: JSONresponseProd,
            data: {
                prod: productID
            },
            dataType: 'json',

            success: function (data) {

                $('#colors').tokenInput(JSONresponse, {
                    propertyToSearch: "name",
                    preventDuplicates: true,
                    minChars: 2,
                    excludeCurrent: true,
                    hintText: "Escribe el nombre del color",
                    noResultsText: "No hay resultados",
                    searchingText: "Buscando...",
                    resultsLimit: 10,
                    tokenValue: "code",
                    theme: "facebook",
                    resultsFormatter: function (item) {
                        return "<li>" + "<img class=\"img-circle\" src='" + URLassets + item.image + "' title='" + item.name + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.name + "</div></li>";
                    },
                    tokenFormatter: function (item) {
                        return "<li><span><img src='" + URLassets + item.image + "' height='15px' width='15px' /> " + item.name + "</span></li>";
                    },
                    caching: true,
                    prePopulate: data
                });

                if ($('#checkColors').is(':checked')) {
                    $("#colors").prop('disabled', false).prop('required', true);
                    $('ul.token-input-list-facebook').removeClass('token-input-list-disabled-facebook').css("pointer-events", "auto");
                    $("#token-input-colors").prop('disabled', false);
                } else {
                    $("#colors").prop('disabled', true).prop('required', false);
                    $('ul.token-input-list-facebook').addClass('token-input-list-disabled-facebook').css("pointer-events", "none");
                    $("#token-input-colors").prop('disabled', true);
                }
            }
        });
    } else {
        $('#colors').tokenInput(JSONresponse, {
            propertyToSearch: "name",
            preventDuplicates: true,
            minChars: 2,
            excludeCurrent: true,
            hintText: "Escribe el nombre del color",
            noResultsText: "No hay resultados",
            searchingText: "Buscando...",
            resultsLimit: 10,
            tokenValue: "code",
            placeholder: "Colores del Producto",
            theme: "facebook",
            resultsFormatter: function (item) {
                return "<li>" + "<img class=\"img-circle\" src='" + URLassets + item.image + "' title='" + item.name + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.name + "</div></li>";
            },
            tokenFormatter: function (item) {
                return "<li><span><img src='" + URLassets + item.image + "' height='15px' width='15px' /> " + item.name + "</span></li>";
            },
            caching: true
        });
    }
});