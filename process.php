<?php
$username="";
$content_name="";
$content="";
$id="0";
$db=mysqli_connect('localhost','root','','gestion blog');
if (isset($_POST['add'])){
    $username=$_POST['username'];
    $content_name=$_POST['content_name'];
    $content=$_POST['content'];
    $id=$_POST['id'];
    $query= "INSERT INTO content (id,username,content_name,content) VALUES ('$id,'$username','$content_name','$content)";
    mysqli_query($db,$query);
    header('location:add.php');
}