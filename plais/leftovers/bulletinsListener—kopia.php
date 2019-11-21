<?php
    
	//Variable containing path to bulletins direcory
	$direcory = './bulletins';
	
	//Listing files and directories inside the specified path
	$fileList = array_diff(scandir($direcory), array('..', '.'));
	//$fileList = scandir('./bulletins');  <-- Does contain unwanted dots due to linux enviroment
	//print_r($fileList);  <-- Lists the filenames in array
	
	//Sorting the array (Acending)
	natsort($fileList);
	
	//Counting the bulletines
	$listLenght = count($fileList) -1;
	//echo $listLenght;
    
	//onsubmit="return false"
	echo '<form method="POST" >';
	echo '<select name="bulletinNo">';
	echo '<option selected disabled>---</option>';
	for ($i = 1; $i <= $listLenght; $i++){
		echo '<option value="'.$i.'">'.$i.'</option>';
	}
	echo '</select>';
	echo '<input type="submit" name="submit" value="Otwórz"/>';
	//echo '<button type="button" name="submit">Otwórz</button>';
	echo '</form>';
	
	$sellectedBulletin=$_POST['bulletinNo'];
	$path ="./bulletins/Bulletin $sellectedBulletin.html";
	$atributes = "toolbar=no,directories=no,menubar=no,scrollbars=yes,width=570,height=600";
	
	if (isset($_POST['submit'])){		
		//echo $sellectedBulletin;
		echo "<script>window.open('$path','Bulletin','$atributes').focus();</script>";
		
	} else {
		
	}
     
?>