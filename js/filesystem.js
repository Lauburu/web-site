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

	});
