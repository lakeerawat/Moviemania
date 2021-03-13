<?php
    $Comment = $_POST['Comment'];

    $con = new mysqli('localhost', 'root', '', 'moviemania');

    $query = "INSERT INTO `captain`(`Comment`) VALUES ('$Comment')";

    $run = mysqli_query($con, $query);

    if($run==TRUE)
        echo "Commented Successfully!!!";
    else
        echo "Error!!!";

?>