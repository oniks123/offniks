<?
    session_start();
    require ("../core/bd.php");  

    $user_progile = mysqli_fetch_assoc( mysqli_query($bd, "SELECT * FROM `users` WHERE `id` = $_SESSION[uid]"));

    if ($user_progile["role"] != "admin") {
        header("location: ../index.php?error=404");
    };
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/booking-admin.css">
</head>
<body>

    <main>

        <section class="left-menu">

            <?php require ("../components/admin-menu/left-menu.php") ?>

        </section>

        <section class="menu">

            <header>            
                
                <div class="type"><h2>Архив бронирования</h2></div>

                <div class="search">
                    <input type="search">
                </div>
    
                <div class="profile">
                    <img src="../img/profile/Screenshot_3.png" alt="">
                </div>
            
            </header>

            <main>

                <? 
                
                    $allbooking = mysqli_fetch_all ( mysqli_query($bd, "SELECT * FROM `bookings` WHERE `Status` LIKE 'Отменено'"));

                ?>

                <div class="description">
                    <p>Имя</p>
                    <p>Номер телефона</p>
                    <p>Почта</p>
                    <p>Время</p>
                    <p>Дата</p>
                    <p>Комментарий</p>
                    <p>Кол-во людей</p>
                    <p>Причина</p>
                </div>
     
                <div class="booking-container">

                    <?
                    
                        foreach ($allbooking as $allbooking) {
                            $user_info = mysqli_fetch_assoc( mysqli_query($bd, "SELECT * FROM `users` WHERE `id` = $allbooking[6]"));
                            ?>
                                <div class="booking-card">

                                    <input type="hidden" name="cancel_id" value="<?echo $allbooking["0"]?>">

                                    <div class="name">
                                        <p><?echo $allbooking["5"]?></p>
                                    </div>

                                    <div class="number">
                                        <p><?echo $user_info["number"]?></p>
                                    </div>

                                    <div class="email">
                                        <p><?echo $user_info["email"]?></p>
                                    </div>

                                    <div class="time">
                                        <p><?echo $allbooking["3"]?></p>
                                    </div>

                                    <div class="data">
                                        <p><?echo $allbooking["1"]?></p>
                                    </div>

                                    <div class="person">
                                        <p><?echo $allbooking["4"]?></p>
                                    </div>

                                    <div class="comments">
                                        <p><?echo $allbooking["2"]?></p>
                                    </div>

                                    <div class="reason">
                                        <p><?echo $allbooking["8"]?></p>
                                    </div>
                                </div>
                            <?
                        }
                    
                    ?>

                </div>

            </main>

        </section>

    </main>
</body>
</html>