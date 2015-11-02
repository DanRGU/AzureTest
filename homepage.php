<!DOCTYPE html>
<html>

<head>

</head>
<body>
<p>

    <?php
    session_start();
    $_SESSION = array();


    echo "SESSIONS";
    $username = "Dan";
    $password = "pass";

    if($username == $_POST["username"] && $password == $_POST["password"]){

        echo "Username and password correct";
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['access_level'] = "standarduser";

    }
    else {
        echo "<p>Username or Password incorrect</p>";
    }

    echo  $_SESSION['username'];

    $accessLevel = $_SESSION[access_level];

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

    session_destroy();
    ?>



</p>
</body>

</html>