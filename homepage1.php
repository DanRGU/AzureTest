<!DOCTYPE html>
<html>

<head>

</head>
<body>
<p>

    <?php
    session_start();
    $username = "Dan";
    $password = "pass";
    # echo $_POST["username"];

    if($username == $_POST["username"] && $password == $_POST["password"]){

        setcookie('username', 'Dan');
        setcookie('access_level','standarduser');
        echo "Username and password correct";
    }
    else {
        echo "NO";
    }

    echo $_COOKIE['username'];
    $accessLevel = $_COOKIE[access_level];

    displayAccessLevelInformation($accessLevel);

    function displayAccessLevelInformation($access_level){
        if ($access_level == "standarduser") {
            echo "<p> You are currently logged in as a standard user</p>";

        }
        elseif ($access_level == "root"){
            echo "<p> You are currently logged in as a root user</p>";
            echo "<p> You now have access to additional administrative features</p>";

        }

    }


    ?>



</p>
</body>

</html>