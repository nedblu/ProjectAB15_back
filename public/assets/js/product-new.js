$(document).ready(function(){var e=document.location.href+"/../../colors/json",o=document.location.href+"/../../assets/content_application/colors/",t=document.location.href.split("/");document.location.href+"/../../../colors/product/json?prod=",t[t.length-1];$("#colors").tokenInput(e,{propertyToSearch:"name",preventDuplicates:!0,minChars:2,excludeCurrent:!0,hintText:"Escribe el nombre del color",noResultsText:"No hay resultados",searchingText:"Buscando...",resultsLimit:10,tokenValue:"code",placeholder:"Colores del Producto",theme:"facebook",resultsFormatter:function(e){return'<li><img class="img-circle" src=\''+o+e.image+"' title='"+e.name+"' height='25px' width='25px' /><div style='display: inline-block; padding-left: 10px;'><div class='full_name'>"+e.name+"</div></li>"},tokenFormatter:function(e){return"<li><span><img src='"+o+e.image+"' height='15px' width='15px' /> "+e.name+"</span></li>"},caching:!0})});