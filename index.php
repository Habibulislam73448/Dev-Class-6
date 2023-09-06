<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href ="Css/style.css">
<body>
<div class="prime_number">
    <h4> Prime Number Check</h4>
<?php

// prime Number Check //
$num = 13;
$remainder = 0;
for($i = 2; $i <$num; $i++){
    if($num % $i == 0){
        $remainder =1;
        break;
    }
}
if($remainder==0){
    echo " $num is an Prime Number. ";
}else{
    echo " $num is not an prime number. ";
}
?>

</div>
<br><br>
<div class="mb-3 col-4 mx-auto mt-5">
    <form action="about.php" method="POST">
    <label for="inputEmail" class="form-label">Email address</label>
    <input name="email_Check" type="email" class="form-control" id="inputEmail">
    <label for="inputPassword" class="form-label">Password</label>
    <input name="password_Check" type="password" class="form-control" id="inputPassword">
    <button type="submit" class="btn btn-primary mt-3 ">Submit</button>
  </div>
</form>
</body>
</html>