<?php 
session_start();
        if(isset($_POST['username'])){
                  include("condb.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];
 
                  $sql="SELECT * FROM login
                  WHERE  password='$password'
                  AND username='$username' ";
                  $result = mysqli_query($con,$sql);

                  if(!empty(mysqli_num_rows($result))){
                      $arrayUser = array();
                      while($row = mysqli_fetch_array($result)){
                        array_push($arrayUser,$row);
                      };

                        $_SESSION["arrayUser"] = $arrayUser;
                        Header("Location: member.php");

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{
 
             Header("Location: index.php"); //user & password incorrect back to login again
 
        }
?>