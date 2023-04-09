<?php
if (isset($_POST['submit'])) {
    $j = 0; //Variable for indexing uploaded image 
    
	$target_path = "attractions/"; //Declaring Path for uploaded images
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) 
	{//loop to get individual element from the array

        $validextensions = array("jpeg", "jpg", "png");  //Extensions which are allowed
        $ext = explode('.', basename($_FILES['file']['name'][$i]));//explode file name from dot(.) 
        $file_extension = end($ext); //store extensions in the variable
        
		$filename = md5(uniqid()) . "." . $ext[count($ext) - 1];//set the target path with a new name of image
        $j = $j + 1;//increment the number of uploaded images according to the files in array       
      
	    if (($_FILES["file"]["size"][$i] < 1000000) && in_array($file_extension, $validextensions)) 
		{
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path.$filename)) 
			{//if file moved to uploads folder
                echo $j. ').<span id="noerror">Image uploaded successfully!.(path: </span><span id="error">https://www.agmeets.org/dashboard-panel-view/'.$target_path.$filename.' <br/><br/>';
            } 
			else 
			{//if file was not moved.
                echo $j. ').<span id="error">please try again!.</span><br/><br/>';
            }
        } 
		else 
		{//if file size and file type was incorrect.
            echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
    }
}
?>