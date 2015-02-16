$(document).ready(function () {
	$("label#close").on("click", function(){
		if ( $(this).closest("section").data("section") == "PC" ){
				$("a[data-type='" + $(this).closest("section").data("name") +"']").data("fname",0);
		}else if( $(this).closest("section").data("section") == "SOFT" ){
				$("a[data-name='" + $(this).closest("section").data("name") +"']").data("fname",0);
				$("a[data-name='" + $(this).closest("section").data("name") +"']").closest("ul").data("ftype",0);
		}else if ( $(this).closest("section").data("section") == "BIGPC"){
			// Ver la manera de unificar esta sección y minimizar
			$("section[data-type='"+$(this).closest("section").data("pc")+"']").data("number",0);
			$("main").children().css("display","block");
		}
		$(this).closest("section").remove();
		});
	
	$("label#maxi").on("click", function(e) {
		e.stopPropagation();
		if ( $(this).closest("section").data("section") == "PC" && $(this).closest("section").data("number") == "0"){
			$(this).closest("section").data("number",1);
			var pc = $(this).closest("section").data("name");
			$("main").children().css("display","none");
			pcinfo(pc);
			}
		});
		
	$("label#mini").on("click", function() {
		$("section[data-type='"+$(this).closest("section").data("pc")+"']").data("number",0);
		$("section[data-section='BIGPC']").remove();
		$("main").children().css("display","block");
		});
	});
