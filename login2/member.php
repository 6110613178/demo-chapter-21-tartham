<?php session_start();  
include('condb.php');
 
    $arrayUser = $_SESSION["arrayUser"];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="logout.php">
	<h1>Member Page</h1>
	<h3> สวัสดี คุณ <?php $user1 = $arrayUser[0]; echo $user1["name"]; ?> ข้อมูล ID/ชื่อ/สถานะ ของคุณคือ </h3>
    <h3>
    <?php
        $i = 0;
        while($i < count($arrayUser)){
            $user = $arrayUser[$i];
            echo "ID: ".$user["ID"];
            echo "<br>";
            echo "Name: ".$user["name"];
            echo "<br>";
            echo "Level: ".$user["level"];
            echo "<br>";
            $i += 1;
        }

    ?>
    </h3>
	<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</html>