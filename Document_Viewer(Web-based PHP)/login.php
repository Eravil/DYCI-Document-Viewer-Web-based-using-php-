<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>DYCI</title>
    <link rel="shortcut icon" type="img/png" href="user/user_page/DYCI_logo.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="container">
        <main class="form-signin">
            <form method="POST" class="frm-main">
                <img class="mb-4" src="/softeng/user/user_page/DYCI_logo.png" alt="" width="80" height="80">
                <h1 class="h3 mb-3 fw-normal">DYCI LOGIN FORM</h1>
                <label for="inputEmail" class="visually-hidden">Email address</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
                <label for="inputPassword" class="visually-hidden">Password</label>
                <input type="password" name="pwd" class="form-control" placeholder="Enter Password" required>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">&copy; Created by Team Eravil</p>
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
    // $type = $_POST['type'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    $query = "select * from accounts where username='$username' and password ='$password'";
    $result = mysqli_query($con, $query) or die(mysqli_connect_error($query));
    while ($row = mysqli_fetch_array($result)) {
        if ($row['username'] == $username && $row['password'] == $password) {
            if ($row['usertype'] == "Admin") {
                header("Location: admin/index.php");
            } else {
                header("Location: user/user_page/user.php");
            }
        }
    }
}
?>