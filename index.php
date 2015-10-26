<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>
                <?php

                function wanted($name, $specs, $mugs, $rolls){
                    $award = (10*($specs * $mugs * $rolls))/2;
                    print "<p>" . "Wanted : " . $name . "</p>";
                    print "<p>" . "Known to be in possesion of : "  . "</p>";
                    print "<p>" . "Specs : " . $specs . "</p>";
                    print "<p>" . "Mugs : " . $mugs . "</p>";
                    print "<p>" . "SGR : " . $rolls . "</p>";
                    print "<p>" . "Award : " . $award . "</p>";
                }

                wanted("Bob", 2,2,2);



                ?>
                <a href="helloSelector.php">Planet Selector</a>
            </p>
        </body>

</html>