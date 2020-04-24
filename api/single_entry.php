<?php
	header("Content-Type:application/json");
	if (isset($_GET['id']) && $_GET['id']!="") {
	 		include('./../db.php');
		 	$id = $_GET['id'];
			 $result = mysqli_query(
			 $mysqli,
			
			"SELECT * FROM `re_conveyance` WHERE id = $id");

			 $json_conv = array();		 

			 if(mysqli_num_rows($result)>0){

			 	while($row = mysqli_fetch_assoc($result)) {
					$json_conv[] = $row;
		 		}

			 // $response_desc = $row['response_desc'];
			 response($json_conv);
			 mysqli_close($mysqli);
			 }else{
			 response(NULL, NULL, 200,"No Record Found");
			 }
			}else{
			 response(NULL, NULL, 400,"Invalid Request");
			 }
			 
			function response($response){	
			
				$json_response = json_encode($response);
			 	echo $json_response;			 		 		
			}	 		
?>