<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>


                <?php
             $arr = array('Monday','Tesuday','Wednesday', 'Thursday','Friday');

                for($k = 0; $k < 5; $k++){
                    echo $array[$k];
                }

                function newFunction($input){
                    for($i = 0; $i < 5; $i++){
                        $array[$i] = substr($input[$i], 0, 3);
                    }
                }

                echo " ";

                newFunction($arr);

                for($j = 0; $j < 5; $j++){
                    echo $array[$j];
                }

 ?>

            </p>
        </body>

</html>