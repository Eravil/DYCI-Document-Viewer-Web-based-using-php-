<?php 
  require("./read.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ADMIN</title>
</head>

<style>
 @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap");
    *{
    font-family: "Poppins", sans-serif;
    }
  html, body {
    margin: 0;
    padding: 0;
  }
  .main {
    height: 100%;
    background-color: #011b50;
    color: white;
    /* Grid */
    display: grid;
    grid-template-rows: auto auto 1fr;
    justify-items: center;
    row-gap: 20px;
    
  }
  .main .create-main {
    grid-row: 1/2;
    display: grid;
    grid-auto-rows: auto;
    row-gap: 5px;
  }
  .main .create-main h3 {
    text-align: center;
  }
  .main .export-main {
    grid-row: 2/3;
    
  }
  .main .read-main {
    grid-row: 3/4;
  }
  .main .read-main tr th {
    width: 200px;
  }
  .main .read-main tr th a{
    color: white;
    text-decoration:none;
  }
  .main .read-main tr td {
    text-align: center;
  }
  .main .read-main tr td:nth-child(4) {
    display: grid;
    grid-auto-flow: column;
  }
</style>

<body>
  <div class="main">
    <form class="create-main" action="/softeng/admin/create.php" method="post">
      <h3>CREATE USER:</h3></hr>
      <input type="text" name="username" style = "width: 400px; height: auto; text-align: center;" placeholder="Enter username" required/>
      <input type="password" name="password" style = "width: 400px; height: auto; text-align: center;" placeholder="Enter password" required/>
      <select name="usertype" style = "width: 409px;text-align-last:center;">
      <option value="Admin" class = "lt">Admin</option>
      <option value="User" class = "lt">User</option>
      </select>
      <input type="submit" name="create" value="CREATE">
    </form>

    <table class="read-main">
      <tr>
        <th><a href="?column=id&sort=<?php echo $sort ?>">ID</a></th>
        <th><a href="?column=username&sort=<?php echo $sort ?>">USERNAME</a></th>
        <th><a href="?column=password&sort=<?php echo $sort ?>">PASSWORD</a></th>
        <th><a href="?column=password&sort=<?php echo $sort ?>">UserType</a></th>
        <th>ACTIONS</th>
      </tr>
      <?php while($results = mysqli_fetch_array($sqlAccounts)) { ?>
        <tr>
          <td><?php echo $results['id']; ?></td>
          <td><?php echo $results['username']; ?></td>
          <td><?php echo $results['password']; ?></td>
          <td><?php echo $results['usertype']; ?></td>
          <td>
            <form action="/softeng/admin/update.php"method="post">
              <input type="submit" name="edit" style = "width: 59px;"value="EDIT"/>
              <input type="hidden" name="editId" value="<?php echo $results['id']; ?>" />
              <input type="hidden" name="editUsername" value="<?php echo $results['username']; ?>" />
              <input type="hidden" name="editPassword" value="<?php echo $results['password']; ?>" />
              <input type="hidden" name="editUsertype" value="<?php echo $results['usertype']; ?>" />
            </form>
            <form action="/softeng/admin/delete.php" method="post">
              <input type="submit" name="delete" value="DELETE"/>
              <input type="hidden" name="deleteId" value="<?php echo $results['id']; ?>"/>
            </form>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>