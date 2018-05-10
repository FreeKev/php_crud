<?php

// Connect db
$db = mysqli_connect('localhost', 'root', 'root', 'phpcrud');

// init variables
$name = "";
$address = "";
$id = 0;

// C
// if save button clicked
if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $address = $_POST['address'];

  $query = "INSERT INTO info (name, address) VALUES ('$name', '$address')";
  mysqli_query($db, $query);
  header('location: index.php'); //redirect
}

// R
$results = mysqli_query($db, "SELECT * FROM info")

?>
