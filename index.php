<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>


                <?php
             $arr = array('Monday','Tesuday','Wednesday', 'Thursday','Friday');

                for($k = 0; $k < 5; $k++){
                    echo $arr[$k];
                }

                function newFunction($input){
                    for($i = 0; $i < 5; $i++){
                        $input[$i] = substr($input[$i], 0, 3);
                    }
                }

                echo " ";

                newFunction($arr);

                for($j = 0; $j < 5; $j++){
                    echo $arr[$j];
                }

 ?>

            </p>
        </body>

</html>