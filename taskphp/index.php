
<?php
// Start the session
session_start();



$_SESSION['name']='welcome';
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
} else {
    $name = "Not Found ";
} 

//session_destroy();



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
   .centerr {
  margin-top: 250px;
  
}


 </style>
</head>
<body>


<div class="d-flex justify-content-center align-items-center" >
        <div>
            <h1 class="text-center centerr"><?php echo  $name; ?> 
            <button class=""><a href="login.php">logout</a></button> </h1>
             
            
            
        </div>
    </div>
    




    <body>
  
</body>


