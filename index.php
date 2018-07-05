<!DOCTYPE html>
<html>
<style type="text/css">

body{
  padding-top:300px;
}
input[type=text],[type=password], button {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input{
  width: 300px;
  height: 50px;
}
</style>
<head>
	<title></title>
</head>
<body>
  <div>
  <center>
  <form action="dashboard.php" method="post">
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"><br>
    <button type="button">Login</button><br>
    <span><a href="registrationform.php">Signup?</a></span>
  </form>
  </center>
  </div>
</body>
</html>