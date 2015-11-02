<!DOCTYPE html>
<html>

<head>

</head>
<body>
<p>

    <?php
    session_start();

    echo "<p>SESSIONS</p>";
    $username = "Dan";
    $password = "pass";
    $login = FALSE;

    if($username == $_POST["username"] && $password == $_POST["password"]){

        echo "Username and password correct";
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['access_level'] = "standarduser";
        $login = TRUE;

    }
    else {
        echo "<p>Username or Password incorrect.</p>";
    }

    if($login) {
        echo "<p>Username is " . $_SESSION['username'] . "</p>";
    }
    else{
        echo "<p>No Username yet. " . "</p>";
    }

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