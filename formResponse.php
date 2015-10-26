<!DOCTYPE html>
<html>

<head>

</head>
<body>
<p>


<?php

        $Forename = $_POST["forename"];
        $surname = $_POST["surname"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $superpowers = $_POST["superpowers"];

        echo $Forename . $surname . $dob . $superpowers . $gender;
?>



</p>
</body>

</html>