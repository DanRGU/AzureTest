<!DOCTYPE html>
<html>

<head>

</head>
<body>
<p>

    <form action="formResponse.php" method="post">
        <label>Forename</label><input type=“text” name=“forename”>
        <label>Surname</label><input type=“text” name=“surname”>
        <label>DOB</label><input type=“text” name=“dob”>
        <label>Gender</label><input type=“text” name=“gender”>
        <label>Superpowers</label><input type=“text” name=“superpowers”>
        <input type="submit" value="Submit">
    </form>

<?php

        $forename = $_POST["forename"];
        $surname = $_POST["surname"];
        $dob = $_POST["dob"];
        $superpowers = $_POST["superpowers"];
        $gender = $_POST["gender"];

        echo $forename . $surname . $dob . $superpowers . $gender;
?>



</p>
</body>

</html>