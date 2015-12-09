$(document).ready(function () {

    var JSONresponse = document.location.href + "/../../colors/json";
    var URLassets = document.location.href + "/../../assets/content_application/colors/";


    var url = document.location.href.split('/');
    var JSONresponseProd = document.location.href + "/../../../colors/product/json?prod=";
    var productID = url[url.length - 1];

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
});