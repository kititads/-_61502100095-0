<?php

    $servername = "localhost";
    $username = "movies";
    $password = "1234";
    $dbname = "databasemovies";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM movies;";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
		echo "   รหัสภาพยนต์: " . $row["id_movies"]."   ชื่อภาพยนต์: " . $row["name_movies"]."   เวลาที่เริ่มฉาย: " . $row["time_movies"]."   ชื่อผู้ใช้งาน: " . $row["name_customer"]."   PIN: " . $row["pin"]."<br><br>"; 
    }
    } else {
    echo "ไม่่พบข้อมูลให้แสดงผล";
    }
    $conn->close();
