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
    
	//Creating form (select tag)
	echo '<form>';
	echo '<h6>Or if you are looking for previous one: ';
	echo '<select id="bulletinNo" class="selectpicker show-tick" data-style="btn-primary" data-width="fit" >';
	//echo '<option selected disabled>---</option>';
	for ($i = 1; $i <= $listLenght; $i++){
		echo '<option value="'.$i.'">'.$i.'</option>';
	}
	echo '</select>';
	echo '<input type="submit" value="Open" class="btn btn-primary btn-me" onclick="return chk()"/>';
	echo '</h6>';
	echo '</form>';
	
	//Creating output
	echo '<p id="choosenBulletin"></p>';
?>