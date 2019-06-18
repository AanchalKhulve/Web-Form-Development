<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type"  content="text/html;charset=utf-8" />
 <title>Enter the Message</title>
</head>
<body>
 <h2>You will be contacted shortly</h2>
<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $to = 'aanchalkhulve@gmail.com';
 $subject = 'Form Submission Confirmation';
 $msg = "$name\n" .
 "$email\n" . 
 "$message";
 mail($to, $subject, $msg, 'From:' . $email);
 echo 'Thanks for submitting the form.<br />'; 
?>
</body>
</html>