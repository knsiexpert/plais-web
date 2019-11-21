<?php
	//Setting up sum variables boi
	$sellectedBulletin=$_POST['bullNum'];
	$path ="./bulletins/Bulletin $sellectedBulletin.html";
	$atributes = "toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600";
	
	//Opening the bulletin window
	echo "<script>window.open('$path','Bulletin','$atributes').focus();</script>";	
?>