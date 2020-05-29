<?php
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $pass=$_POST['password'];
    
    $connection= mysqli_connect('localhost','root','','loginapp');
    if($connection)
        echo "yes";
    else
        echo "no";
    $q="insert into users(username,password)values('$name','$pass')";
    mysqli_query($connection,$q);
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
.content {
  max-width: 500px;
  margin: auto;
}
</style>
</head>
<body>
  <div class="content">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<form class="example" action="action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
  
   <a href="add.php" target="_blank"><img  src="image/ivo.jpg" width="50" style="float:right";></a>
    
    <div class = "col-xs-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for ="username">username</label>
                <input type="text" name="username" class="form-control">
            </div>
            
            <div class="form-group">
                <label for ="password">password</label>
                <input type="password" name ="password" class="form-control">
            </div>
            <div class="form-group">
                <input class ="btn btn-primary" type="submit" name ="submit" value="Submit">
            </div>
        </form>
        
    </div>
    </div>
</body>
</html>