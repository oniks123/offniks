<?
    require ("../core/bd.php");

    $user_progile = mysqli_fetch_assoc( mysqli_query($bd, "SELECT * FROM `users` WHERE `id` = $_SESSION[uid]"));

    if ($user_progile["role"] != "admin") {
        header("location: ../index.php?error=404");
    };

    $remove = mysqli_query($bd, "DELETE FROM menu WHERE `menu`.`id` = $_GET[id]");

    var_dump($remove);

    header("location: ../menu/".$_GET["type"] .".php");

?>