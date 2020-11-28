<?php 
include "config/config.php";

		$sdt = isset($_POST['SDT']) ? mysqli_real_escape_string($conn,$_POST['SDT']) : null;
		$contact = isset($_POST['contact']) ? mysqli_real_escape_string($conn,$_POST['contact']) : null;
		$resInfo = isset($_POST['res-info']) ? mysqli_real_escape_string($conn,$_POST['res-info']) : null;

		var_dump($_POST);
		// create sql
		$sql = "INSERT INTO `khachhang_thuong`(sdt,diachi,dichvudangky,status) VALUES ('$sdt', '$contact', '$resInfo',1)";
		
		//save to db
		if (mysqli_query($conn,$sql)) {
			//success
			//header("Location: 404.php");
		}else {
			//error
			echo $sql;
			echo "query error" . mysqli_error($conn);
			
		}

?>