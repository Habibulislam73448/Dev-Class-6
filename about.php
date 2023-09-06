<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">
    <title></title>
</head>
<body style="text-align: center;">

<h3 style="font-size: 20px;"> Auth Sysyem</h3><br>
<?php

// Email & Pass Check

$UserName = "habibulislam486126@gmail.com";
$Password = "habib486126@#";

if($UserName ==($_REQUEST ['email_Check'] )){
    if($Password ==($_REQUEST ['password_Check'])){
        echo "You Are Logged In";
    }else{  
        echo "You Are Hacker";
        echo "<p>&#128128;</p>";
    }
}else{
    echo "Incorrect Email Address";
}
?>
</body>
</html>