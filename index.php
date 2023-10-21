<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оникс</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./img/favicon/favicon.svg" type="image/x-icon">
</head>
<body>

<?php
    session_start();
    require ("./core/bd.php");  
?>
    <header>

        <section class="booking-pop disable">

            <div class="booking-container">
                <form action="./core/booking.php" method="post">
                    <div class="head-booking">

                        <h2>Бронирование стола</h2>
        
                        <button class="close-btn" type="button">&#10006;</button>

                    </div>
        
                    <?
                   
                        if ($_SESSION) {
                            ?>
                                <div class="main-booking">
            
                                    <div class="up-container">
                    
                                        <div class="date-bookuing">
                    
                                            <h2>Дата бронирования</h2>
                    
                                            <input type="date" name="date" required>
                    
                                        </div>
                    
                                        <div class="people-bookuing">
                    
                                            <h2>Кол-во человек</h2>
                    
                                            <div class="people-container">
                                                <span class="people-btn" id="plus">+</span>
                                                <input type="number" id="count" value="1" name="people">
                                                <span class="people-btn" id="minus">-</span>
                                            </div>
                    
                                        </div>
                    
                                    </div>
                    
                                    <div class="down-container">
                    
                                        <h2>Выбор времени</h2>
                    
                                        <div class="time">
                    
                                            <label class="time-box">
            
                                                <input class="time-btn" name="time" type="radio" value="12:00"></input>
                                                <span class="time-container">13:00</span>
                                    
                                            </label>
            
                                            <label class="time-box">
            
                                                <input class="time-btn" name="time" type="radio" value="14:00"></input>
                                                <span class="time-container">14:00</span>
                                    
                                            </label>
            
                                            <label class="time-box">
            
                                                <input class="time-btn" name="time" type="radio" value="15:00"></input>
                                                <span class="time-container">15:00</span>
                                    
                                            </label>
            
                                            <label class="time-box">
            
                                                <input class="time-btn" name="time" type="radio" value="16:00"></input>
                                                <span class="time-container">16:00</span>
                                    
                                            </label>
            
                                            <label class="time-box">
            
                                                <input class="time-btn" name="time" type="radio" value="17:00"></input>
                                                <span class="time-container">17:00</span>
                                    
                                            </label>
            
                                            <label class="time-box">
            
                                                <input class="time-btn" name="time" type="radio" value="18:00"></input>
                                                <span class="time-container">18:00</span>
                                    
                                            </label>
            
                                            <label class="time-box">
            
                                                <input class="time-btn" name="time" type="radio" value="19:00"></input>
                                                <span class="time-container">19:00</span>
                                    
                                            </label>
            
                                            <label class="time-box">
            
                                                <input class="time-btn" name="time" type="radio" value="20:00"></input>
                                                <span class="time-container">20:00</span>
                                    
                                            </label>
            
                                            <label class="time-box">
            
                                                <input class="time-btn" name="time" type="radio" value="21:00"></input>
                                                <span class="time-container">21:00</span>
                                    
                                            </label>
            
                                            <label class="time-box">
            
                                                <input class="time-btn" name="time" type="radio" value="22:00"></input>
                                                <span class="time-container">22:00</span>
                                    
                                            </label>
                                                                            
                    
                                        </div>
                    
                                        <input type="text" placeholder="Пожелание к бронированию" class="comments" name="comments">
                    
                                    </div>
                
                                    <div class="info disable">
                
                                        <div class="name-bookuing">
                    
                                            <h2>Имя гостя</h2>
                    
                                            <input type="text" class="name-input" placeholder="" name="name" required>
                
                                        </div>
                
                                    </div>
                    
                                </div>
                    
                                <div class="footer-booking">
                    
                                    <h2>Служба поддержки: oniks@support.ru</h2>
                    
                                    <button class="continue" type="button">Продолжить</button>
            
                                    <button class="end disable" type="submit">Завершить</button>
                    
                                </div>
                            <?
                        }
                        
                        else {
                            ?>
                                <h2 class="login-pls">Для бронирования столика нужно <a href="autoriz.php">авторизироваться</a> </h2>
                            <?
                        }

                    ?>

                </form>
            </div>

        </section>

        <div class="header-container">

            <div class="head">

                <section class="menu">

                    <div class="menu-btn open">&#9776;</div>
        
                    <div class="menu-container hide-menu">
        
                        <div class="menu-head">
                            
                            <div class="menu-btn close">&#10006;</div>

                            <div class="logo"><h2>ONIKS</h2></div>

                        </div>

                        <div class="menu-main">

                            <?
                            
                                if ($_SESSION) {
                                    ?> 
                                    
                                        <div class="profile"><?
                                            $user_progile = mysqli_fetch_assoc( mysqli_query($bd, "SELECT * FROM `users` WHERE `id` = $_SESSION[uid]"));
                                            echo $user_progile["name"];
                                        ?></div>

                                    <?
                                }
                                else {
                                    ?> 
                                        <div class="autoriz">
                                            <a href="autoriz.php">Вход</a>
                                        </div>
                                    <?
                                }

                                if ($user_progile["role"] == "admin") {
                                    ?> 
                                    
                                        <div class="logout"><a href="./admin/users.php">Админ панель</a></div>

                                    <?
                                }

                            ?>
                            
                            <div>
                                <a href="index.php">Главная</a>
                            </div>
                            
                            <div>
                                <a href="menu.php">Меню</a>
                            </div>

                            <div>
                                <a href="#">Галерея</a>
                            </div>

                            <div>
                                <a href="about.php">О нас</a>
                            </div>

                            <div>
                                <a href="#contacts" class="cont-btn">Контакты</a>
                            </div>

                            <?
                            
                                if ($_SESSION) {
                                    ?> 
                                    
                                        <div class="logout"><a href="./core/logout.php">Выход</a></div>

                                    <?
                                }
                            
                            ?>

                        </div>

                        <div class="menu-footer">
                            
                            <div class="social-network">

                                <a href="https://vk.com/ONIKS.business" target="_blank"><div id="vk"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 400 400" fill="none"> <path fill-rule="evenodd" clip-rule="evenodd" d="M181.376 135.138C177.012 135.454 171.458 136.302 169.236 136.992C165.426 138.175 160.678 142.394 161.556 143.817C161.717 144.079 162.601 144.432 163.52 144.603C167.643 145.369 171.122 147.711 172.681 150.77C175.346 155.999 176.544 172.354 175.11 183.933C174.163 191.586 173.762 193.36 172.358 196.135C168.598 203.562 159.873 197.488 150.392 180.844C146.977 174.849 137.438 155.789 135.318 150.723C132.741 144.568 131.926 143.435 128.997 141.943L126.524 140.684L107.866 140.818C91.0165 140.939 89.0661 141.029 87.7501 141.749C85.664 142.89 84.7729 144.449 85.0489 146.475C85.5354 150.05 96.2759 172.524 105.316 188.883C116.223 208.623 130.644 229.179 141.095 239.881C150.17 249.175 164.159 258.266 175.441 262.203C182.911 264.81 187.06 265.428 198.91 265.699C210.659 265.969 214.034 265.63 216.524 263.93C218.574 262.53 219.208 260.598 219.591 254.592C219.968 248.664 221.125 243.581 222.715 240.866C224.117 238.47 227.165 235.704 228.473 235.639C233.036 235.414 235.591 237.312 245.124 248.009C254.062 258.038 257.366 260.99 262.304 263.356C264.529 264.423 267.261 265.505 268.373 265.761C271.071 266.38 307.485 265.684 309.836 264.968C312.163 264.258 314.671 261.796 314.728 260.164C314.881 255.811 314.373 254.002 311.912 250.144C308.001 244.011 302.969 238.287 291.48 226.903C278.733 214.271 277.843 213.096 277.825 208.87C277.81 205.323 279.466 202.597 290.656 187.758C306.442 166.825 312.762 156.714 314.52 149.586C315.554 145.392 314.964 143.372 312.304 142.001C309.802 140.711 305.983 140.588 282.372 141.043L263.774 141.402L262.365 143.035C261.589 143.933 260.072 146.869 258.993 149.561C253.372 163.577 242.372 182.853 234.917 191.751C232.005 195.227 227.48 198.784 225.97 198.784C223.863 198.784 222.125 197.422 220.808 194.738L219.592 192.259L219.715 168.892C219.825 148.092 219.756 145.275 219.09 143.239C217.552 138.541 215.648 137.146 209.173 135.975C205.355 135.285 186.992 134.732 181.376 135.138Z" fill="white"></path> <circle cx="200" cy="200" r="187.5" stroke="white" stroke-width="25"></circle></svg></div></a>
                                <a href="#"><div id="tg"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 400 400" fill="none"> <path fill-rule="evenodd" clip-rule="evenodd" d="M282.25 119.994C267.672 125.374 88.0115 194.619 85.3653 195.878C76.5722 200.059 75.5442 205.582 82.8643 209.317C83.571 209.678 95.7316 213.579 109.888 217.987L135.627 226.002L194.072 189.322C226.216 169.148 253.164 152.416 253.955 152.14C255.94 151.445 257.648 151.51 258.445 152.31C259.004 152.87 259.027 153.151 258.583 153.974C258.29 154.519 236.944 173.967 211.148 197.192C185.352 220.417 164.177 239.602 164.091 239.824C164.007 240.046 163.134 251.642 162.152 265.592L160.368 290.955L162.307 290.693C163.374 290.548 165.062 289.996 166.06 289.465C167.058 288.935 173.774 282.832 180.985 275.903C188.195 268.974 194.344 263.209 194.65 263.091C194.955 262.974 206.438 271.134 220.167 281.225C233.896 291.316 246.206 300.072 247.52 300.681C250.969 302.28 254.854 302.438 257.378 301.084C259.631 299.874 261.834 296.868 262.761 293.739C263.119 292.527 270.968 256.143 280.204 212.885C295.579 140.862 296.995 133.889 297 130.151C297.005 126.619 296.859 125.779 295.915 123.92C295.25 122.609 294.116 121.271 293.007 120.489C290.473 118.701 286.277 118.508 282.25 119.994Z" fill="white"></path> <circle cx="200" cy="200" r="187.5" stroke="white" stroke-width="25"></circle></svg></div></a>

                            </div>


                            <div class="addres">
                                <p><span>Адрес: </span>Самая ониксовская 12 <br> <span>Номер телефона: </span>+7 (999) 999-99-99 <br> <span>Время работы: </span>пн - вс 12:00 - 00:00</p>
                            </div>


                        </div>
        
                    </div>
        
                </section>

                <div class="logo"><h2>ONIKS</h2></div>
    
                <div class="addres"><h2>Самая ониксовская 12</h2> <br> <h2 id="number">+7 (999) 999-99-99</h2></div>
    
            </div>
    
            <div class="booking">
    
                <div class="booking-btn"><h2>Забронировать стол</h2></div>
                <div class="date"><p>Пн - Вс 12:00 - 00:00 <br> Вход 18+</p></div>
    
            </div>

        </div>

    </header>

    <main>

        <section class="discription">

            <div class="discription-text">

                <h3>
                    ONIKS - ИМЕНИТЫЙ РЕСТОРАН, 
                    КОТОРЫЙ НАХОДИТСЯ В САМОМ 
                    СЕРДЦЕ ИСТОРИЧЕСКОЙ МОСКВЫ. 
                    ЭТО КОЛЛАБОРАЦИЯ СТИЛЯ, НЕВЕРОЯТНОГО 
                    ВКУСА И ВЫСОКИХ СТАНДАРТОВ СЕРВИСА.А ЕЩЕ: 
                    АВТОРСКАЯ КУХНЯ И БЕЗГРАНИЧНАЯ КОЛЛЕКЦИЯ КОКТЕЙЛЕЙ. 
                    МЕСТО, ГДЕ ИНТЕРЬЕР ПРОРАБОТАН ДО МЕЛОЧЕЙ, РАСТВОРЯЕТ 
                    В СВОЕЙ АТМОСФЕРЕ И ОТКРЫВАЕТ ДВЕРЬ В МИР НЕВЕРОЯТНЫХ 
                    ВКУСОВ. МЫ - СИНОНИМ СЛОВА «ГАСТРОНОМИЧЕСКОЕ УДОВОЛЬСТВИЕ».
                </h3>

            </div>

            <div class="discription-img"><img src="./img/background/discriprion.png" alt=""></div>
            

        </section>

        <section class="events">

            <h2>АФИША МЕРОПРИЯТИЙ В РЕСТОРАНЕ</h2>

            <div class="events-container">

                <div class="card-event">

                    <img src="./img/events/image 2.png" alt="">
                    <h3>День рождения</h3>

                </div>

                <div class="card-event">

                    <img src="./img/events/image 2-1.png" alt="">
                    <h3>DJ программа</h3>

                </div>

                <div class="card-event">

                    <img src="./img/events/image 2-2.png" alt="">
                    <h3>Живой звук</h3>

                </div>                

            </div>

        </section>

        <section class="map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab680dbd20576de0e61b14592fbe821e78f1650b01e439460a41f030d9775d3e5&amp;
            width=100%25&amp;height=470&amp;lang=ru_RU&amp;scroll=false"></script>
        </section>

    </main>

    <footer id="contacts">

        <div class="footer-left">

            <div class="logo"><h1>ONIKS</h1></div>
            <div class="social-network">
                <a href="#"><div id="vk"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 400 400" fill="none"> <path fill-rule="evenodd" clip-rule="evenodd" d="M181.376 135.138C177.012 135.454 171.458 136.302 169.236 136.992C165.426 138.175 160.678 142.394 161.556 143.817C161.717 144.079 162.601 144.432 163.52 144.603C167.643 145.369 171.122 147.711 172.681 150.77C175.346 155.999 176.544 172.354 175.11 183.933C174.163 191.586 173.762 193.36 172.358 196.135C168.598 203.562 159.873 197.488 150.392 180.844C146.977 174.849 137.438 155.789 135.318 150.723C132.741 144.568 131.926 143.435 128.997 141.943L126.524 140.684L107.866 140.818C91.0165 140.939 89.0661 141.029 87.7501 141.749C85.664 142.89 84.7729 144.449 85.0489 146.475C85.5354 150.05 96.2759 172.524 105.316 188.883C116.223 208.623 130.644 229.179 141.095 239.881C150.17 249.175 164.159 258.266 175.441 262.203C182.911 264.81 187.06 265.428 198.91 265.699C210.659 265.969 214.034 265.63 216.524 263.93C218.574 262.53 219.208 260.598 219.591 254.592C219.968 248.664 221.125 243.581 222.715 240.866C224.117 238.47 227.165 235.704 228.473 235.639C233.036 235.414 235.591 237.312 245.124 248.009C254.062 258.038 257.366 260.99 262.304 263.356C264.529 264.423 267.261 265.505 268.373 265.761C271.071 266.38 307.485 265.684 309.836 264.968C312.163 264.258 314.671 261.796 314.728 260.164C314.881 255.811 314.373 254.002 311.912 250.144C308.001 244.011 302.969 238.287 291.48 226.903C278.733 214.271 277.843 213.096 277.825 208.87C277.81 205.323 279.466 202.597 290.656 187.758C306.442 166.825 312.762 156.714 314.52 149.586C315.554 145.392 314.964 143.372 312.304 142.001C309.802 140.711 305.983 140.588 282.372 141.043L263.774 141.402L262.365 143.035C261.589 143.933 260.072 146.869 258.993 149.561C253.372 163.577 242.372 182.853 234.917 191.751C232.005 195.227 227.48 198.784 225.97 198.784C223.863 198.784 222.125 197.422 220.808 194.738L219.592 192.259L219.715 168.892C219.825 148.092 219.756 145.275 219.09 143.239C217.552 138.541 215.648 137.146 209.173 135.975C205.355 135.285 186.992 134.732 181.376 135.138Z" fill="black"></path> <circle cx="200" cy="200" r="187.5" stroke="black" stroke-width="25"></circle></svg></div></a>
                <a href="#"><div id="tg"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 400 400" fill="none"> <path fill-rule="evenodd" clip-rule="evenodd" d="M282.25 119.994C267.672 125.374 88.0115 194.619 85.3653 195.878C76.5722 200.059 75.5442 205.582 82.8643 209.317C83.571 209.678 95.7316 213.579 109.888 217.987L135.627 226.002L194.072 189.322C226.216 169.148 253.164 152.416 253.955 152.14C255.94 151.445 257.648 151.51 258.445 152.31C259.004 152.87 259.027 153.151 258.583 153.974C258.29 154.519 236.944 173.967 211.148 197.192C185.352 220.417 164.177 239.602 164.091 239.824C164.007 240.046 163.134 251.642 162.152 265.592L160.368 290.955L162.307 290.693C163.374 290.548 165.062 289.996 166.06 289.465C167.058 288.935 173.774 282.832 180.985 275.903C188.195 268.974 194.344 263.209 194.65 263.091C194.955 262.974 206.438 271.134 220.167 281.225C233.896 291.316 246.206 300.072 247.52 300.681C250.969 302.28 254.854 302.438 257.378 301.084C259.631 299.874 261.834 296.868 262.761 293.739C263.119 292.527 270.968 256.143 280.204 212.885C295.579 140.862 296.995 133.889 297 130.151C297.005 126.619 296.859 125.779 295.915 123.92C295.25 122.609 294.116 121.271 293.007 120.489C290.473 118.701 286.277 118.508 282.25 119.994Z" fill="black"></path> <circle cx="200" cy="200" r="187.5" stroke="black" stroke-width="25"></circle></svg></div></a>
            </div>

        </div>

        <div class="footer-right">

            <div class="footer-menu">
                            
                <div>
                    <a href="index.php">Главная</a>
                </div>
                
                <div>
                    <a href="menu.php">Меню</a>
                </div>

                <div>
                    <a href="#">Галерея</a>
                </div>

                <div>
                    <a href="about.php">О нас</a>
                </div>

            </div>

            <div class="footer-addres">
                <p>
                    <span>Адрес</span>
                    Ониксовская 12
                </p>

                <p>
                    <span>Номер телефона</span>
                    +7 (999) 999-99-99
                </p>

                <p>
                    <span>Вреся работы</span>
                    ПН - ВС 12:00 - 00:00
                </p>
            </div>

        </div>

    </footer>

    <script src="./js/menu.js"></script>

    <?php
    
        if ($_SESSION) {
            ?>
                <script src="./js/booking.js"></script>
                <script src="./js/people.js"></script>
            <?
        }
        else{
            ?>
                <script id="booking-sctipt">
                    const body = document.querySelector("body")
                    const BookingBtn = document.querySelectorAll(".booking-btn")
                    const BookingPop = document.querySelector(".booking-pop")
                    const close = document.querySelector(".close-btn")

                    BookingBtn.forEach(BookingBtn => {
                        BookingBtn.addEventListener('click', () => {
                            body.classList.add("block-scroll")
                            BookingPop.classList.remove("disable")

                        })
                    });

                    close.addEventListener('click', () => {
                        body.classList.remove("block-scroll")
                        BookingPop.classList.add("disable")
                    })
                </script>
            <?
        }

    ?>
    
</body>
</html>
