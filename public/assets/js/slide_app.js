$(document).ready(function() {

	$('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 300,
        itemMargin: 5,
    	directionNav: false
    });

    Sortable.create(simpleList, { 
		animation: 150,
    	onSort: function (evt) {
    		var itemEl = evt.item;
    		var itemfrom = evt.from;
	    	console.log( "test" );
	    },
    });

     $(".fancy-btn").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',
    	helpers : {
    		title : {
    			type : 'float'
    		}
    	}
    });

    /*var token = $('.token').attr('data-token');
    var baseURL = window.location.href;

	Dropzone.autoDiscover = false;

	console.log (baseURL);

	var myDropzone = new Dropzone("#dropzoneFileUpload", {
		url: baseURL + "/image/upload",
		autoProcessQueue: false,
		params: {
			_token: token
		}
	});

	$('#add').on('click',function(e){
        e.preventDefault();
        myDropzone.processQueue();  
	}); 
	
	Dropzone.options.myAwesomeDropzone = {
		paramName: "file", // The name that will be used to transfer the file
		maxFilesize: 2, // MB
		addRemoveLinks: true,
		accept: function(file, done) {
			
		},
	};*/

});