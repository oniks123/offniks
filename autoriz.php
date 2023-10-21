<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <link rel="stylesheet" href="./css/autoriz.css">
</head>
<body>

    ИЗМЕНИ НА БЕЛЫЙ СТИЛЬ 

    <section id="login">
        <div class="login-container ">

            <header><p>Авторизация</p></header>
    
            <main>
    
                <form action="./core/login.php" method="post">
    
                    <div class="login">
                        <input type="text" name="login" required placeholder="Login">
                    </div>
    
                    <div class="password">
                        <input type="password" name="password" required placeholder="password">
                    </div>

                    <? 
                    if (!empty($_GET["error"])) 
                        {
                            ?> <div class="error"><?echo("неверный логин или пароль");?></div> <?
                        };
                        {

                        }
                    ?>
    
                    <button type="submit">Войти</button>
    
                </form>
    
            </main>
    
            <footer>
                <div class="register"><p>Регистрация</p></div>
                <div class="forgot-passord"><p>Забыли пароль</p></div>
            </footer>
    
        </div>
    </section>

    <section id="register">
        <div class="reg-container disable">

            <header><p>Регистрация</p></header>
    
            <main>
    
                <form action="../core/reg.php" method="post">
    
                    <div class="username">
                        <input type="text" name="username" required placeholder="Имя пользователя">
                    </div>

                    <div class="login">
                        <input type="text" name="login" required placeholder="Логин">
                    </div>
    
                    <div class="password">
                        <input type="password" name="password" required placeholder="Пароль">
                    </div>

                    <div class="number">
                        <input type="number" name="number" required placeholder="Номер телефона">
                    </div>

                    <div class="email">
                        <input type="email" name="mail" required placeholder="Почта">
                    </div>
    
                    <button type="submit">Регистрация</button>
    
                </form>
    
            </main>
    
            <footer>
                <div class="enter"><p>Авторизация</p></div>
                <div class="forgot-passord"><p>Забыли пароль</p></div>
            </footer>
    
        </div>
    </section>

    <script src="./js/reg.js"></script>
</body>
</html>