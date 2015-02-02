<?php
	if(!$_POST) exit;
	$softype = $_POST['soft'];
	$sofname = $_POST['name'];
	//$wildcard = "php";
	
	$package = '<section class="software window" data-type='.$softype.' data-name='.$sofname.'>';
	$package .= '<div class="soft_header"><label style="float:left;width:30%;">'.$sofname.'</label><div style="float:right;width:40%;">minimizar, maximizar, cerrar</div></div>';
	
	//echo $wildcard.'/'.$softype.'/'.$sofname.'.'.$wildcard;
	
	switch ($softype){
		case "GR":
			$package .= '<div style="width:100%;height:200px;">Descripción del software gráfico</div><div style="width:100%;height:20px;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
			break;
		case "SO":
			$package .= '<div style="width:100%;height:200px;">Descripción del software SO</div><div style="width:100%;height:20px;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
			break;
		case "OF":
			$package .= '<div style="width:100%;height:200px;">Descripción del software ofimático</div><div style="width:100%;height:20px;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
			break;
		case "MU":
			$package .= '<div style="width:100%;height:200px;">Descripción del software multimedia</div><div style="width:100%;height:20px;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
			break;
		case "P2":
			$package .= '<div style="width:100%;height:200px;">Descripción del software P2P</div><div style="width:100%;height:20px;position:relative;bottom:0px;">¿Datos especificos (plataforma, tipo ...) </div>';
			break;
		default:
			break;
		}
	$package .= '</section>';
	
	echo $package;

?>
