<?php 
  require('./database.php');

  if (isset($_POST["edit"])) {
    $editId = $_POST['editId'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
    $editUsertype= $_POST['editUsertype'];
  }

  if (isset($_POST['update'])) {
    $updateId = $_POST['updateId'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = $_POST['updatePassword'];
    $updateUsertype= $_POST['updateUsertype'];

    $queryUpdate = "UPDATE accounts SET username = '$updateUsername', password = '$updatePassword', usertype = '$updateUsertype' WHERE id = $updateId";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);
    if($sqlUpdate){
    echo '<script>alert("Successfully updated!")</script>';
    echo '<script>window.location.href = "index.php"</script>';
    }
    else{
      echo '<script>alert("NOT UPDATED!")</script>';
    }
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update</title>
</head>

<style>
  html, body {
    margin: 0;
    padding: 0;
  }
  .main {
    height: 100vh;

    /* Grid */
    display: grid;
    grid-template-rows: auto 1fr;
    justify-items: center;
    row-gap: 20px;
    
  }
  .main .update-main {
    grid-row: 1/2;
    display: grid;
    grid-auto-rows: auto;
    row-gap: 5px;
  }
  .main .update-main h3 {
    text-align: center;
  }
</style>

<body>
<div class="main">
    <form class="update-main" action="/softeng/admin/update.php" method="post">
      <h3>UPDATE USER:</h3>
      <input type="text" name="updateUsername" placeholder="Enter username" value="<?php echo $editUsername ?>" required/>
      <input type="password" name="updatePassword" placeholder="Enter password" value="<?php echo $editPassword ?>"required/>
      <select name="updateUsertype" value = "<?php echo $editUsertype ?>">
      <option value = "Admin">Admin</option>
      <option value = "User">User</option>
      </select>
      <input type="submit" name="update" value="UPDATE" />
      <input type="hidden" name="updateId" value="<?php echo $editId?>" />
    </form>
</body>
</html>