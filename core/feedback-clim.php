<?php 
    require ("./bd.php");

    $id_post = $_POST["id-post"];
    $reson_claim = $_POST["reson"];
    $other_text = $_POST["other-text"];

    if ($reson_claim == "") {
        header ("location: ../about.php?error=claim");
    }
    else {
        $claim = mysqli_query($bd, "INSERT INTO `claim-feedback` (`id`, `IDpost`, `reson`, `description`) VALUES (NULL, '$id_post', '$reson_claim', '$other_text')");

        if (!$claim) {
            header ("location: ../about.php?error=claim");
        }
            header ("location: ../about.php");
    }
?>