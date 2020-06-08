<!DOCTYPE html>
<?php include 'process.php';?>
<html lang="en">
<head>
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

 $sql = "INSERT INTO content (id, username, content_name,content) VALUES ('5', 'haze', 'php','php ...')";

 if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
 } else {
   echo "Error updating record: " . $conn->error;
 }

 $conn->close();
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <link rel="stylesheet" href="style.css">
    <title>Add</title>
    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
    <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="Home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Add</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="edit.php">Edit</a>
    </li>
  </ul>
</nav>
  

</head>
<body>
<h1 >IT Blog</h1>
<h3 >Welcome  to add form</h3>
<form method="post">
<p>
    <label >id</label>
    <input type="number" name=id>
 </p>

 <p>
    <label >username</label>
    <input type="text" name=username>
 </p>
 <p>
    <label >content_name</label>
    <input type="text" name=content_name>
 </p>
 <p>
    <label >content</label>
    <input type="text" name=content>
 </p>
 
 <input type="submit" name="add" id="btn" value="add">
  
 </form>
 

</body>
</html>