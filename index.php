<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>
                <?php

                for ($i = 1; $i < 30; $i++) {
                    if ($i % 2) {
                        print "On the " + $i + "of the month Specs are available";
                    } else if ($i % 3) {
                        print "On the " + $i + "of the month Mugs are available";

                    } else if ($i % 4) {
                        print "On the " + $i + "of the month SGROLLSSSSSSSSSS are available";

                    }
                }


                ?>
            </p>
        </body>

</html>