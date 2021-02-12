<?php 
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{ 
		
		function get_data() 
		{ 
			$datae = array(); 
			$datae[] = array( 'Name' => $_POST['name'], 'Resume_Upload' => $_POST['Resume_Upload'], 'Highest_Qualification' => $_POST['Highest_Qualification'],); 
			return json_encode($datae);
		} 
		
		$name = "Comunev_Requrements"; 
		$file_name = $name . '.json'; 
	
		if(file_put_contents( "$file_name", get_data())) 
		{
			echo $file_name .' file created'; 
		} 
		else 
		{ 
			echo 'There is some error'; 
		} 
	} 
?> 
