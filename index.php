<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>



                <?php

                function incr_a($inc)
                {
                    $a = 0;
                    $a = $a + $inc;
                    return $a;
                }

                   $a = 0;
                   $a = incr_a(10);
                   echo $a;


                ?>

            </p>
        </body>

</html>