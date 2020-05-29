<?php
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $Dob=$_POST['DOB'];
    $num1=$_POST['mobile'];
    $email=$_POST['email'];
    
    $connection= mysqli_connect('localhost','root','','loginapp');
    if($connection)
        echo "saved successfully";
    else
        echo "no";
    $q="insert into users(username,DOB,num1,email)values('$name','$dob','$num1','$email')";
    mysqli_query($connection,$q);
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="st.css">
</head>
<body>
    
    <div class = "container">
       <div style="text-align:center">
        <form action="add.php" method="post">
            <div class="form-group">
                <label for ="username">Name</label>
                <input type="text" name="username" class="form-control">
            </div>
            
            <div class="form-group">
                <label for ="DOB">DOB</label>
                <input type="date" name ="DOB" class="form-control">
            </div>
            <div class="form-group">
                <label for ="mobile">Mobile Number</label>
                <input type="number" name ="mobile" class="form-control">
            </div>
            <div class="form-group">
                <label for ="email">Email</label>
                <input type="email" name ="email" class="form-control">
            </div>
            <div class="form-group">
                <input class ="btn btn-primary" type="submit" name ="Submit" value="save">
            </div>
        </form>
        
    </div>
    </div>
    
    
</body>
</html># phone-book-web-app
