<!DOCTYPE html>
<html>

    <head>

    </head>
        <body>
            <p>


                <?php
             $arr = array('one','two','three', 'four','stop','five');
                while(list(, $val)=each($arr)){
                    if($val=='stop'){
                        break;
                    }
                    echo "$val<br />\n";
                }
 ?>

            </p>
        </body>

</html>