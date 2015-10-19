$(document).ready(function() {

	$('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 250,
        itemMargin: 5,
    	directionNav: false
    });

    var sortableList = Sortable.create(slideList, { 
		animation: 150,
		group: "slides",
		disabled: true,
		dataIdAttr: 'data-id',
    	onSort: function (evt) {
  
	    },
	    store: {
	    	get: function (sortable) {
	            var order = localStorage.getItem('slides');
	            return order ? order.split('|') : [];
	        },
	        set: function (sortable) {
	        	localStorage.clear();
	            var order = sortable.toArray();
	            localStorage.setItem('slides', order.join('|'));
	        }     
    	}
    });

	$('#switcher').on('click', function() { 
		var state = sortableList.option("disabled"); // get

	    sortableList.option("disabled", !state); // set

		if (state) {
			$(this).addClass('btn-default').removeClass('btn-primary');
    		$(this).html('<i class="fa fa-lock"></i> Deshabilitar edición');
		} else {
			$(this).addClass('btn-primary').removeClass('btn-default');
    		$(this).html('<i class="fa fa-unlock"></i> Habilitar edición');
		}
		
	});

	$('#saveOrder').on( 'submit', function(e) {
        e.preventDefault();

        if (localStorage.getItem('slides')) {
        	var data = $(this).serialize();
        	var slides = '&order=' + localStorage.getItem('slides').split('|');

        	$.ajax({
               	type: "PUT",
               	url: "http://localhost:8080/projects/alphabeta_cms/public/slides/order",
               	data: data + slides,
               	beforeSend: function( xhr ) {
               		$('#saveorder').addClass('btn-success').removeClass('btn-primary');
    				$('#saveorder').html('<i class="fa fa-refresh fa-spin"></i> Guardando...');
  				}
            })
            .done(function( response ) {
            	localStorage.clear();

            	console.log( );
				$('#saveorder').addClass('btn-primary').removeClass('btn-success');
    			$('#saveorder').html('<i class="fa fa-floppy-o"></i> Guardar orden');
    			$('#alertForAjax').append("<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Guardado exitosamente</strong> " + response.msg + "</div>");
			});

        } else {
        	
        	$('#alertForAjax').append("<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Alerta SYS126:</strong> No hay datos que guardar, por favor haz las modificaciones pertinentes y posteriormente presiona este botón para guardar.</div>");
        	
        }

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