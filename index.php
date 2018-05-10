<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <table>
      <thread>
        <tr>
          <th>Name</th>
          <th>Address</th>
          <th colspan="2">Action</th>
        </tr>
      </thread>
      <tbody>
        <?php while ($row = mysqli_fetch_array($results)) { ?>
            <tr>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['address'] ?></td>
              <td>
                <a href="#">Edit</a>
              </td>
              <td>
                <a href="#">Delete</a>
              </td>
            </tr>
          <?php } ?>
      </tbody>
    </table>

    <form method="post" action="server.php">
      <div class="input-group">
        <label>Name</label>
        <input type="text" name="name">
      </div>
      <div class="input-group">
        <label>Address</label>
        <input type="text" name="address">
      </div>
      <div class="input-group">
        <button type="submit" name="save" class="btn">Save</button>
      </div>
    </form>
  </body>
</html>
