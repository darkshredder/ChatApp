<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Webchat</title>
</head>

<body>
    <div id="main">
        <div id="info">
            <h2>Login Here</h2>

            <form action="login.php" method="post">
                <label><b>Username</b></label>
                <input type="text" name="uname" placeholder="User Name"><br><br>
                <label><b>Password</b></label>
                <input type="text" name="pass" placeholder="User Name"><br><br>
                <button style="background-color: greenyellow;color:wheat;" type="submit"><b>Login</b></button>
            </form>

            <form action="signup.php" method="post">
                <h2>DOnt have an account Sign up here</h2>
                <label><b>Username </b></label>
                <input type="text" name="uname" placeholder="UserName"><br><br>
                <label><b>Email </b></label>
                <input type="text" name="Email" placeholder="Email"><br><br>
                <label><b>Password </b></label>
                <input type="text" name="Password" placeholder="Password"><br><br>
                <button style="background-color: greenyellow;color:wheat;" type="submit"><b>Login</b></button>
            </form>




        </div>
    </div>

</body>

</html>