<!DOCTYPE html>
<html>

<head>

</head>
<body>
<p>


<?php

        $forename = $_POST["forename"];
        $surname = $_POST["surname"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $superpowers = $_POST["superpowers"];

        echo "Forename: " . $forename . " Surname: " . $surname . " Date of Birth: " . $dob . " Gender: " . $gender . " Superpowers: " . $superpowers;
?>



</p>
</body>

</html>