<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>

                <!--<a href="helloSelector.php">"Planet Selector"</a>
                <a href="form.php">"Form"</a> -->

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
                else echo "Connection to database established.";

                $sql_query = "SELECT * FROM marvelMovies WHERE yearReleased LIKE '2008'";
                $result = $db->query($sql_query);
                while($row = $result->fetch_array()){
                    echo "<p>" . $row['title'] . "</p>";
                }

                $result->close();
                $db->close();


                ?>

            </p>
        </body>

</html>