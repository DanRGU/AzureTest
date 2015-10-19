<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>
                <?php

                $nameArray = array("Ruairi","Dan","Mike","Bob","Fred","Charles","Henry","Dick","Chris","Jim");
                sort($nameArray);

                for($j = 0; $j <3; $j++){

                print join(", ",$nameArray);
                $i = rand(0,9);
                print strtoupper ($nameArray[$i]);
                unset($nameArray[$i]);
                print join(", ",$nameArray);

                }


                ?>
            </p>
        </body>

</html>