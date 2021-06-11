<?php 
session_start();
            include("condb.php");

            $name = $_POST["name"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirmpassword = $_POST["confirmpassword"];

            $sql = "SELECT * FROM login";
            $result = mysqli_query($con,$sql);

            $id = mysqli_num_rows($result) + 1;

            $sql2 = "INSERT INTO login (ID, username, password, name, level)
            VALUES ($id, '$username', '$password', '$name', 'member')";
            $result2 = mysqli_query($con,$sql2);
            Header("Location: index.php");

?>