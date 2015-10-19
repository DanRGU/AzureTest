<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>
                <?php

                $nameArray = array("Ruairi","Dan","Mike","Bob","Fred","Charles","Henry","Dick","Chris","Jim");
                //print join(", ",$nameArray);
                sort($nameArray);
                //print join(", ",$nameArray);
                print $nameArray[rand(0,9)];



                ?>
            </p>
        </body>

</html>