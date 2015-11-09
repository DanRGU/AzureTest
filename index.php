<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>


                <form action="homepage.php" method="post">

                    <label>Username</label><input type="text" name="username">
                    <label>Password</label><input type="password" name="password">
                    <button type="submit" onclick=  value="Submit">Log In</button>

                </form>

                <?php

                                    $db = new mysqli(
                    "br-cdbr-azure-south-a.cloudapp.net",
                    "b3d04eaaa95e7f",
                    "6b2faa59",
                    "DanRGUDatabase"
                );

                if($db->connect_errno){
                    die('Connectfailed['.$db->connect_error.']');
                }
                else echo "<p> Connection to database established.</p>";

                $sql_query = "SELECT * FROM topics";
                $result = $db->query($sql_query);
                while($row = $result->fetch_array()){
                    echo "<p>" . $row['topicName'] . "</p>";
                }

                $result->close();
                $db->close();


                ?>

            </p>
        </body>

</html>