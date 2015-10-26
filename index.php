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
                else echo "Connection to database established.  Mad HAXXZORZ initiated.";
                ?>

            </p>
        </body>

</html>