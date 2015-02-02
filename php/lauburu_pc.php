<?php
	if(!$_POST) exit;
	$pctype = $_POST['pc'];
	
	switch ($pctype){
		case "gamer":
			echo '<div id="ShowPC" style="width:100%;height:100%;background:red;"></div>';
			break;
		case "office":
			echo '<div id="ShowPC" style="width:100%;height:100%;background:brown;"></div>';
			break;
		case "server":
			echo '<div id="ShowPC" style="width:100%;height:100%;background:blue;"></div>';
			break;
		case "work":
			echo '<div id="ShowPC" style="width:100%;height:100%;background:green;"></div>';
			break;
		case "media":
			echo '<div id="ShowPC" style="width:100%;height:100%;background:pink;"></div>';
			break;
		default:
			break;
		}
?>
