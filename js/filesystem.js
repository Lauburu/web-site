function DisplayTime(){ // Show current time dynamically
	var CurrentDate=new Date();
	var hours=CurrentDate.getHours();
	var minutes=CurrentDate.getMinutes();
	var seconds=CurrentDate.getSeconds();
	if (minutes<=9){ minutes="0"+minutes;}
	if (seconds<=9){ seconds="0"+seconds;}
	if (hours<=9){ hours="0"+hours;}
	var day=CurrentDate.getDay();
	var monthday=CurrentDate.getDate();
	var month=CurrentDate.getMonth();
	//var dia=new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
	//var mes=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Dicimbre");
	var ano=CurrentDate.getFullYear();
	var currentTime=hours+":"+minutes+":"+seconds+" - "+monthday+"/"+(month+1)+"/"+ano;
	document.getElementById('current_time').innerHTML=currentTime;
	setTimeout("DisplayTime()",1000);
	}
	
function pc(type) { // Call to pc profiles
	$.ajax({
		type: "POST",
		url: "php/lauburu_pc.php",
		data: "pc="+type,
		async: false,
		success: function(data){ $("main").html(data)}
		});
	}
	
function soft(type,name) { // Call to software
	$.ajax({
		type: "POST",
		url: "php/lauburu_software.php",
		data: "soft="+type+"&name="+name,
		async: false,
		success: function(data){ $("main").append(data)}
		});
	}

$(document).ready(function () {
	$("ul.dropdown-menu [data-toggle=dropdown]").on("click", function(event) {
	    event.preventDefault(); 													// Avoid following the href location when clicking
	    event.stopPropagation();										   			// Avoid having the menu to close when clicking
	    $(this).parent().addClass("open");											// Re-add .open to parent sub-menu item
	    $(this).parent().find("ul").parent().find("li.dropdown").addClass("open");
		});
		
	$("li > a").on("click", function(e){
		e.preventDefault();
		if ( $(this).data("type") === "PC") { 										// If PCprofile is clicked
			pc($(this).data("name"));
			} 			
		else if ( $(this).data("type") ){ 											// If Software is clicked ...
			$("#ShowPC").remove();
			// Si hay un PC cargado, ¿como borrarlo para mostrar la info del software?
			if( $(this).closest("ul").data("ftype") == 0 ){ 						// ... and another one is active and is his 1st time, enable
				soft($(this).data("type"),$(this).data("name"));
				$(this).closest("ul").data("ftype",1);
				$(this).data("fname",1);
			}else {
				if( $(this).data("fname") == 1){ 									// ... and is his 2nd time, diseable
					$("section[data-name='" + $(this).data("name") +"']").remove();
					$(this).closest("ul").data("ftype",0);
					$(this).data("fname",0);
				}else{ 																// ... and was not chosen before, enable
					$("section[data-type='" + $(this).data("type") +"']").remove();	
					soft($(this).data("type"),$(this).data("name"));				
					$(this).data("fname",1);
					}
				}
			}
		});
	});
