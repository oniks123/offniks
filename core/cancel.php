<?php

    require ("./bd.php");

    $cancel_id = $_POST["cancel_id"];

    $canel = mysqli_query($bd, "UPDATE `bookings` SET `Status` = 'Отменено' WHERE `bookings`.`id` = $cancel_id;");

    if (!empty($canel)) {
        header("location: ../admin/booking.php");
    }
    else {
        header("location: ../admin/booking.php?error=cancel");
    }
?>