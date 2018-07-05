<?php
if (empty($_POST['username']) && empty($_POST['password']) && empty($_POST['emailaddress'])) {
    echo 'Please fill up fields';
    return false;
}

$user_name = $_POST['username'];
$pass_word = $_POST['password'];
$email_Address = $_POST['emailaddress'];
$contact_number = $_POST['cnumber'];

echo "<center>" ."Username: " .$user_name."<br>" . "Password: ".$pass_word."<br>"."Email Address: ".$email_Address."<br>"."Contact Number: ".$contact_number. "</center>";
?>