<?php
	header("Content-Type: application/json; charset=UTF-8");	

	include('./../db.php');

	$data = file_get_contents("data1.json");
	
	$payload = json_decode(stripslashes($data), true);

	$conveyance = $payload["conveyance"];
	$hotel = $payload["hotel"];
	$food = $payload["food"];
	$mobile = $payload["mobile"];
	$internet = $payload["internet"];

	foreach($conveyance as $conv) {
		$query = "insert into re_conveyance(from_date, to_date, purpose, mode, km, amt, attachement, date) values('".$conv["from"]."','".$conv["to"]."','".$conv["purpose"]."','".$conv["mode"]."','".$conv["km"]."', '".$conv["amt"]."','".$conv["attachement"]."','".$conv["date"]."' )";
						
		if (!$mysqli -> query($query)) {
  		echo("Error description: " . $mysqli -> error);
		} 				
	}

	foreach($hotel as $hotel) {
		$query = "insert into re_hotel(from_date, to_date, hotel_name, inv_no, amt, attachement, date) values('".$hotel["from_date"]."','".$hotel["to_date"]."','".$hotel["hotel_name"]."','".$hotel["inv_no"]."',".$hotel["amt"].", '".$hotel["attachement"]."','".$hotel["date"]."' )";
						
		if (!$mysqli -> query($query)) {
  		echo("Error description: " . $mysqli -> error);
		} 				
	}

foreach($food as $food) {
		$query = "insert into re_food(inv_no, amt, bill_attachement, date) values('".$food["inv_no"]."',".$food["amt"].", '".$food["bill_attachement"]."','".$food["date"]."' )";
						
		if (!$mysqli -> query($query)) {
  		echo("Error description: " . $mysqli -> error);
		} 				
	}

foreach($mobile as $mobile) {
		$query = "insert into re_mobile(inv_no, amt, attachement, date) values('".$mobile["inv_no"]."',".$mobile["amt"].", '".$mobile["attachement"]."','".$mobile["date"]."' )";
						
		if (!$mysqli -> query($query)) {
  		echo("Error description: " . $mysqli -> error);
		} 				
	}

foreach($internet as $internet) {
		$query = "insert into re_internet(inv_no, amt, attachement, date) values('".$internet["inv_no"]."',".$internet["amt"].", '".$internet["attachement"]."','".$internet["date"]."' )";

		if (!$mysqli -> query($query)) {
  		echo("Error description: " . $mysqli -> error);
		} 				
	}	
?>