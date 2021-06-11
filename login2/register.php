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

            $sql2 = "SELECT * FROM login
            WHERE username='$username' ";
            $result2 = mysqli_query($con,$sql2);

            if($password == $confirmpassword and mysqli_num_rows($result2) == 0){
                $sql3 = "INSERT INTO login (ID, username, password, name, level)
                VALUES ($id, '$username', '$password', '$name', 'member')";
                $result3 = mysqli_query($con,$sql3);
                Header("Location: index.php");
            } else if (mysqli_num_rows($result2) == !0){
                echo "<script>";
                    echo "alert(\" username นี้มีผู้ใช้แล้ว\");";
                    echo "window.history.back()";
                echo "</script>";
            } else {
                echo "<script>";
                    echo "alert(\" confirm password ไม่ถูกต้อง\");";
                    echo "window.history.back()";
                echo "</script>";
            }

?>