<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
  input[type=text],[type=password],[Type=number],[type=submit]{
      width: 30%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      position: center;
  }
</style>
  <script type="text/javascript">
    function confirmPass() {
        var email = document.getElementById("pass").value
        var confemail = document.getElementById("confpass").value
        if(password != confirm_password) {
            alert('Password Not Matching!');
        }
    }

    function confirmEmail() {
        var email = document.getElementById("email").value
        var confemail = document.getElementById("confemail").value
        if(email != confemail) {
            alert('Email Not Matching!');
        }
    }

    function checkLength() {
      var val = document.getElementById("cnumber").value
    if (val.length >1 && val.length !=11 ) {
    alert("length must be exactly 11 characters")
       }
    }
    
    
  </script>
	<title></title>
</head>
<body>
<div>
  <h1>Registration Form</h1>
    <form action="dashboard.php" method="post">
      Username: <br>
    	<input type="text" name="username" required><br>
      Password: <br>
      <input type="password" id="password" name="password"  title="Password must be 6 characters including 1 uppercase letter, 1 lowercase letter and numeric characters" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$" required><br>
      Confirm Password: <br>
      <input type="Password" name="confirm_password" id="confirm_password" onblur="confirmPass(this)" required><br>
      Email Address: <br>
      <input type="text" id="email" name="emailaddress" placeholder="Email Address" value="@email.com" required><br>
      Confirm Email Address: <br>
    	<input type="text" id="confemail" name="cemailaddress" onblur="confirmEmail(this)" required><br>
      Contact number: <br>
    	<input type="number" name="cnumber" id="cnumber" placeholder="Contact Number" onblur = "checkLength(this)" ><br>
      <input type="submit">
    </form>
<div>
</body>
</html>