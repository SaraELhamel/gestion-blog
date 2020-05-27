<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Login page</title>
</head>
<h1>IT Blog</h1>
<h3>Welcome Everyone</h3>
<body>
    <div id=form>
<form action="process.php" method="POST">
<p>
    <label >Username</label>
    <input type="text" id="user" name="user"/>
</p>
<p>
    <label >Password</label>
    <input type="password" id="pass" name="pass"/>
</p>
<p>
    <label >Email</label>
    <input type="email" id=em name="em">
   
</p>
<input type="button" id="btn" value="Login"/>
</form>
    </div>
</body>
</html>