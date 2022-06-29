<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/sms/style.css">
</head>

<body>
    <div class="form">
        <form action="./dashboard/index.php" method="POST">
            <div><label for=""> Username : </label><input type="text" name="rollNumber" class="rollNumber" placeholder="Enter Id"></div>
            <div><label for=""> Password : </label><input type="text" name="password" class="password" placeholder="Enter Password"></div>
            <div class="radio">
                <span>
                    <input type="radio" name="role" id="" value="0" class="role">Admin
                </span>
                <span>
                    <input type="radio" name="role" id="" value="1" class="role">Staff
                </span>
                <span>
                    <input type="radio" name="role" id="" value="2" class="role">Student
                </span>
            </div>
            <input type="submit" value="login" class="submit">
        </form>
    </div>
</body>

</html>