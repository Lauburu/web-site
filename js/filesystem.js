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

function pcinfo(name){
	$.ajax({
		type: "POST",
		url: "php/"+name+".php",
		data: "name="+name,
		async: false,
		success: function(data){ $("main").append(data)}
		});
	}

function info(sect,type,name) { // Call to software
	$.ajax({
		type: "POST",
		url: "php/lauburu_data.php",
		data: "section="+sect+"&type="+type+"&name="+name,
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
		
	$("li > a").on("click", function(){
		//e.preventDefault();
		if ( $(this).closest("ul").data("section") === "PC" ) {						// If PCprofile is clicked
			if( $(this).data("fname") == 0 ){
				info($(this).closest("ul").data("section"),$(this).data("type"),$(this).data("type"));
				$(this).data("fname",1);
			}else{
				$("section[data-name='" + $(this).data("type") +"']").remove();
				$(this).data("fname",0);
				}
			}
		else if ( $(this).closest("ul").data("section") === "SOFT" ){ 				// If Software is clicked ...
			if( $(this).closest("ul").data("ftype") == 0 ){ 						// ... and another one is active and is his 1st time, enable
				info($(this).closest("ul").data("section"),$(this).data("type"),$(this).data("name"));
				$(this).closest("ul").data("ftype",1);
				$(this).data("fname",1);
			}else {
				if( $(this).data("fname") == 1){ 									// ... and is his 2nd time, disable
					$("section[data-name='" + $(this).data("name") +"']").remove();
					$(this).closest("ul").data("ftype",0);
					$(this).data("fname",0);
				}else{ 																// ... and was not chosen before, enable
					$("section[data-type='" + $(this).data("type") +"']").remove();	
					info($(this).closest("ul").data("section"),$(this).data("type"),$(this).data("name"));				
					$(this).data("fname",1);
					}
				}
			}
		});
	});
