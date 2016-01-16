<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>


                <?php
               $a = 0;
                $b= &$a;
                $b++;
                echo '$a == ',$a, '<br />';
                $a--;
                echo '$a == ',$b, '<br />';
 ?>

            </p>
        </body>

</html>