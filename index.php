<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>
                <?php

                $nameArray = array("Ruairi","Dan","Mike","Bob","Fred","Charles","Henry","Dick","Chris","Jim");
                print join(", ",$nameArray);
                sort($nameArray);
                print join(", ",$nameArray);



                ?>
            </p>
        </body>

</html>