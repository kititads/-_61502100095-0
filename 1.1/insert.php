<?php
    $servername = "localhost";
    $username = "movies";
    $password = "1234";
    $dbname = "databasemovies";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO movies (id_movies, name_movies, time_movies, name_customer, pin)
    VALUES ('{$_POST['id_movies']}', '{$_POST['name_movies']}', '{$_POST['time_movies']}', '{$_POST['name_customer']}', '{$_POST['pin']}')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>