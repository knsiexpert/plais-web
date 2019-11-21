<?php
	//Variable containing path to bulletins direcory
	$direcory = './bulletins';
	
	//Listing files and directories inside the specified path
	$fileList = array_diff(scandir($direcory), array('..', '.'));
	//$fileList = scandir('./bulletins');  <-- Does contain unwanted dots due to linux enviroment
	
	//Sorting the array (Acending)
	natsort($fileList);
	
	//Counting the bulletines
	$listLenght = count($fileList) -1;
	
	$sellectedBulletin=$listLenght;
	$path ="./bulletins/Bulletin $sellectedBulletin.html";
	$atributes = "toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600";
	$onclick="window.open('$path','Bulletin','$atributes').focus(); return false";
	
	echo '<h3>Newest bulletin: ';
	echo '<a href="#" onclick="'.$onclick.'">Bulletin No '.$sellectedBulletin.'</a></h3>';	
?>