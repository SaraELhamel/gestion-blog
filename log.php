<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Login page</title>
</head>
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
    <input type="email" id="btn" value="Login"/>
</p>
<p>
    <input type="submit">
</p>
</form>
    </div>
</body>
</html>