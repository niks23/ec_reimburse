<?php
	header("Content-Type:application/json");

	if (isset($_GET['date']) && $_GET['date']!="") {
                include('./../db.php');
	
	 	 $date = $_GET['date'];
		 
		 $result = mysqli_query(
		 $mysqli,

		 "SELECT * FROM `re_food` where date = '$date'");

		 $json_array = array();		 

		if(mysqli_num_rows($result)>0){
			
			while($row = mysqli_fetch_assoc($result)) {
		 		$json_array[] = $row;
		 	}

		 	response($json_array);
			
			mysqli_close($mysqli);
		 } else{
		 	response(NULL, 200,"No Record Found");
		 }
		} else{
		 response(NULL, 400,"Invalid Request");
		}
		 
		function response($response){			 
			$json_response = json_encode($response);
		 	echo $json_response;			 		 		
		}
?>