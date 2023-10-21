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
    <link rel="stylesheet" href="../css/users-admin.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>

    <main>

        <section class="left-menu">

            <?php require ("../components/admin-menu/left-menu.php") ?>    

        </section>

        <section class="menu">

            <header>            
                
                <div class="type"><h2>Пользователи</h2></div>

                <div class="search">
                    <input type="search">
                </div>
    
                <div class="profile">
                    <img src="../img/profile/Screenshot_3.png" alt="">
                </div>
            
            </header>

            <main>
     
                <div class="description">
                    <p>ID</p>
                    <p>Имя пользователя</p>
                    <p>Логин</p>
                    <p>Номер телефона</p>
                    <p>Почта</p>
                    <p>Должность</p>
                </div>

                <?

                    $admin = mysqli_fetch_all (mysqli_query($bd, "SELECT * FROM `users` WHERE `role` LIKE 'admin'"));
                    $editor = mysqli_fetch_all (mysqli_query($bd, "SELECT * FROM `users` WHERE `role` LIKE 'editor'"));
                    $user = mysqli_fetch_all (mysqli_query($bd, "SELECT * FROM `users` WHERE `role` LIKE 'user'"));

                ?>

                <div class="user-container">
                    <?

                        if (!empty($admin)) {
                            foreach ($admin as $admin) { 
                                ?>

                                    <form action="../core/update-admin.php" method="post">
    
                                        <div class="user">

                                                <label for="id">

                                                    <p><?echo $admin["0"]?></p>

                                                <input type="text" name="id" class="update-role" value="<?echo $admin["0"]?>">

                                            </label>

                                            <input minlength="5" maxlength="32" onchange="submit();" name="username" value="<?echo $admin["1"]?>"></input>

                                            <p name="login"><?echo $admin["2"]?></p>

                                            <p name="number"><?echo $admin["4"]?></p>

                                            <p name="email"><?echo $admin["5"]?></p>


                                            <div class="roles">

                                                <input type="hidden" name="role" value="admin">

                                                <label class="type-btn">
                                    
                                                    <p class="type-text" >Администратор</p>
                                                    <input type="radio" class="update-role" name="role" value="admin" onclick="submit();">
                                        
                                                </label>
                                        
                                                <label class="type-btn">
                                    
                                                    <p class="type-text" >Редактор</p>
                                                    <input type="radio" class="update-role" name="role" value="editor" onclick="submit();">
                                        
                                                </label>
                                        
                                                <label class="type-btn">
                                    
                                                    <p class="type-text">Пользователь</p>
                                                    <input type="radio" class="update-role" name="role" value="user" onclick="submit();">
                                        
                                                </label>
                                                
                                            </div>

                                        </div>

                                    </form>  

                                <?
                            };
                        };

                        if (!empty($editor)) {
                            foreach ($editor as $editor) { 
                                ?>

                                    <form action="../core/update-admin.php" method="post">
            
                                        <div class="user">

                                            <label for="id">

                                                <p><?echo $editor["0"]?></p>

                                                <input type="text" name="id" class="update-role" value="<?echo $editor["0"]?>">

                                            </label>

                                            <input minlength="5" maxlength="32" onchange="submit();" name="username" value="<?echo $editor["1"]?>"></input>

                                            <p name="login"><?echo $editor["2"]?></p>

                                            <p name="number"><?echo $editor["4"]?></p>

                                            <p name="email"><?echo $editor["5"]?></p>

                                            <div class="roles"> 

                                                <input type="hidden" name="role" value="editor">


                                                <label class="type-btn">
                                    
                                                    <p class="type-text">Редактор</p>
                                                    <input type="radio" class="update-role" name="role" value="editor" onclick="submit();">
                                        
                                                </label>
                                        
                                                <label class="type-btn">
                                    
                                                    <p class="type-text" >Администратор</p>
                                                    <input type="radio" class="update-role" name="role" value="admin" onclick="submit();">
                                        
                                                </label>
                                        
                                                <label class="type-btn">
                                    
                                                    <p class="type-text">Пользователь</p>
                                                    <input type="radio" class="update-role" name="role" value="user" onclick="submit();">
                                        
                                                </label>
                                                
                                            </div>

                                        </div>

                                    </form>  
                                    
                                <?
                            };
                        };

                        if (!empty($user)) {
                            foreach ($user as $user) {
                                ?>

                                    <form action="../core/update-admin.php" method="post">
            
                                        <div class="user">

                                                <label for="id">

                                                    <p><?echo $user["0"]?></p>

                                                <input type="text" name="id" class="update-role" value="<?echo $user["0"]?>">

                                            </label>

                                            <input minlength="5" maxlength="32" onchange="submit();" name="username" value="<?echo $user["1"]?>"></input>

                                            <p name="login"><?echo $user["2"]?></p>

                                            <p name="number"><?echo $user["4"]?></p>

                                            <p name="email"><?echo $user["5"]?></p>

                                            <div class="roles">

                                                <input type="hidden" name="role" value="user">

                                                <label class="type-btn">
                                    
                                                    <p class="type-text" > Пользователь</p>
                                                    <input type="radio" class="update-role" name="role" value="user" onclick="submit();">
                                        
                                                </label>
                                        
                                                <label class="type-btn">
                                    
                                                    <p class="type-text" >Администратор</p>
                                                    <input type="radio" class="update-role" name="role" value="admin" onclick="submit();">
                                        
                                                </label>
                                        
                                                <label class="type-btn">
                                    
                                                    <p class="type-text">Редактор</p>
                                                    <input type="radio" class="update-role" name="role" value="editor" onclick="submit();">
                                        
                                                </label>
                                                
                                            </div>

                                        </div>

                                    </form>  
                                    
                                <?
                            };
                        };

                    ?>
                                            
                </div>

            </main>

        </section>

    </main>

    <script>
        function submit() {
            FormUser = document.querySelector(".form-user").submit();
        }
    </script>
</body>
</html>