$(document).ready(function() {
  
	$('form').dirtyForms({ 
         message: 'Aún no has guardado los cambios, si abandonas la página tus cambios no se aplicarán.' 
    });
    
    $('[data-toggle="popover"]').popover();

	$('[data-toggle="tooltip"]').tooltip();

});