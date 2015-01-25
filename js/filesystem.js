function DisplayTime(){ // Show current time dynamic
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

$(document).ready(function () {
	$(".dropdown li").on("click", "span", function(){
		if($(this).hasClass("caret-right")){
			$(this).removeClass("caret-right");
			$(this).addClass("caret");
		}else{
			$(this).removeClass("caret");
			$(this).addClass("caret-right");
			}
		});
		
		
	$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
	    // Avoid following the href location when clicking
	    event.preventDefault(); 
	    // Avoid having the menu to close when clicking
	    event.stopPropagation(); 
	    // Re-add .open to parent sub-menu item
	    $(this).parent().addClass('open');
	    $(this).parent().find("ul").parent().find("li.dropdown").addClass('open');
		});
	});
