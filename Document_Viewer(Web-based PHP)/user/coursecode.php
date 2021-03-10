<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Student Modules</title>
    <link rel="shortcut icon" type="img/png" href="/softeng/user/user_page/DYCI_logo.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f71518ba93.js" crossorigin="anonymous"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/softeng/user/coursecode.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="container">
        <main class="form-signin">
            <form method="POST" class="frm-main">
                <img class="mb-4" src="/softeng/user/user_page/DYCI_logo.png" alt="" width="80" height="80">
                <h1 class="h3 mb-3 fw-normal">DYCI COURSE CODE</h1>
                <label for="inputPassword" class="visually-hidden">Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Enter your Course Code" required>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Submit</button>
                <hr>
                <a class="btn btn-primary" href="/softeng/user/user_page/scanner.php" role="button"><i class="fas fa-qrcode"></i> QR Code Shortcut</a>
                <p class="mt-4 mb-3 text-default"><i>More Than a School, a Family</i></p>
            </form>
        </main>
    </div>

</body>

</html>
<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
    echo "Unable to establish connection" . mysqli_connect_error();
}
$db = mysqli_select_db($con, "weblogin");

if (!$db) {
    echo "Database not found" . mysqli_connect_error();
}
if (isset($_POST['submit'])) {
    $password = $_POST['pwd'];

    $query = "select * from user_code where coursecode ='$password'";
    $result = mysqli_query($con, $query) or die(mysqli_connect_error($query));
    while ($row = mysqli_fetch_array($result)) {
        if ($row['coursecode'] == $password && $row['course_name'] == 'coursecode1') {
            header("Location: course1/course1.php");
        } elseif ($row['coursecode'] == $password && $row['course_name'] == 'coursecode2') {
            header("Location: course2/course2.php");
        }
    }
}
?>