<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>
                <?php



                    $provisionedActivities = array("specs", "drugs", "rock and roll");

                    foreach($provisionedActivities as $x){
                        print "<p>$x</p>";
                    }

                $provisionedActivities[1] = "hugs";
                unset($provisionedActivities[2]);
                foreach($provisionedActivities as $x){
                    print "<p>$x</p>";
                }




                ?>
            </p>
        </body>

</html>