<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">

    <title>edit</title>
    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
    <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="Home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="add.php">Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Edit</a>
    </li>
  </ul>
</nav>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE content SET content_name='poo' WHERE id=0";

if ($conn->query($sql) === TRUE) {
   echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>


<h1 >IT Blog</h1>
<h3 >Welcome  to edit form</h3>
<form method="post" >
 <p>
    <label >id_user</label>
    <input type="number" name=id_user>
 </p>
 <p>
    <label >username</label>
    <input type="text">
 </p>
 <p>
    <label >Email</label>
    <input type="email">
 </p>
 <p>
    <label >Post</label>
    <input type="text">
 </p>
 <input type="button" id="btn" value="edit"/>
  
 </form>
</body>
</html>