<?php
	$destination_path = '';

	$result = 0;
	$counter = 0;

	function reArrayFiles($file_post){ 
		$arrFile = array(); 
		$file_count = count($file_post['name']); 
		$file_keys = array_keys($file_post); 
		for ($i=0; $i<$file_count; $i++){ 
			foreach ($file_keys as $key){
				$arrFile[$i][$key] = $file_post[$key][$i];
			} 
		} 
		return $arrFile; 
	}
	
	$destination_path = 'upload/' . uniqid() . '/';
		
	mkdir($destination_path, 0777);
	
	$arrFile = reArrayFiles($_FILES['file']);

	foreach ($arrFile as $file) {
		
		print '';
		
		$counter++;

		$target_path = $destination_path . basename($file['name']);

		if(@move_uploaded_file($file['tmp_name'], $target_path)) {
		  $result = 1;
		  echo "File ".$counter." uploaded!<br>";
		}
	}	
	sleep(1);
?>