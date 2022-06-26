<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="form">    
        <form action="http://localhost/StudentManagementSystem/dashboard.php" method="POST">
            <input type="text" name="rollNumber" placeholder="Enter Id">
            <input type="text" name="password" placeholder="Enter Password">
            <input type="radio" name="role" id="" value="0"> Admin
            <input type="radio" name="role" id="" value="1"> Staff
            <input type="radio" name="role" id="" value="2"> Student
            <input type="submit" value="login">
        </form>
    </div>
</body>

</html>