<!DOCTYPE html>
<html>

<head>

</head>
<body>
<p>

    <?php
    $username = "Dan";
    $password = "pass";
    echo $_POST["username"];

    if($username == $_POST["username"] && $password == $_POST["password"]){

        setcookie('username', 'Dan');
        setcookie('access_level','standarduser');
        echo "Username and password correct";
    }
    else {
        echo "NO";
    }


   ?>



</p>
</body>

</html>