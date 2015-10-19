<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>
                <?php
                $count1 = 7;
                $count2 = 7;
                $count3 = 7;
                $i = 1;


                while($count1 > 0 || $count2 > 0 || $count3 > 0){
                $i++;
                $todaysGood = rand(0,2);


                if ($todaysGood == 0) {
                    $count1--;
                    print "On the " . $i . "of the month Specs are available";

                } else if ($todaysGood == 1) {
                    $count2--;
                    print "On the " . $i . "of the month Mugs are available";

                } else if ($todaysGood == 2) {
                    $count3--;
                    print "On the " . $i . "of the month SGROLLSSSSSSSSSS are available";

                }
                }
                print "No more goods are available this month ";


                ?>
            </p>
        </body>

</html>