$(document).ready(function() {

	$('.flexslider').flexslider({
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
		url: baseURL + "/create/image/upload",
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
	};

});