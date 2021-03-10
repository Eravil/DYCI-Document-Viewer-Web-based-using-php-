<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con){
    echo "Unable to establish connection" .mysqli_connect_error();
}
    $db = mysqli_select_db($con, "weblogin");

    if(!$db){
        echo "Database not found" .mysqli_connect_error();
    }
        if(isset($_POST['submit']))
        {
            $password = $_POST['pwd'];

            $query = "select * from user_code where coursecode ='$password'";
            $result = mysqli_query($con, $query) or die (mysqli_connect_error($query));
            while($row = mysqli_fetch_array($result)){
                if($row['coursecode'] == $password && $row['course_name'] =='coursecode1'){
                    header("Location: admin_course1.php");
                }elseif ($row['coursecode'] == $password && $row['course_name'] =='coursecode2'){
                    header("Location: admin_course2.php");
                }
            }
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap");
        *{
         font-family: "Poppins", sans-serif;
        }
        html, body{
            margin: 0;
            padding: 0;
        }
        .main{
            width: 100%;
            height: 100%;
            background-color: #011b50;
            color: white;
            font-size: 18px;
            position: absolute;
        }
        .container{
            padding: 15px 8px;
            width: 50%; 
            height: 5%;
            margin: 50px 350px;
            text-align: left;
        }
</style>
</head>
<body>
    <div class="main">
        <div class="container">
            <form action="admin_coursecode.php" method="post">
            <label for="coursecode">Course Code:</label>
            <input type="password" name="pwd" placeholder = "Enter course code" style = "font-size: 18px; width: 400px;">
            <input type = "submit" name = "submit" value = "Submit" style = "font-size: 18px; width: 100px;">
            </div>
        </div>
</body>
</html>

