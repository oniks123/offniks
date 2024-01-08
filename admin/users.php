<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользователи</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/media/admin-media.css">
</head>
<body>
    <header>
        <div class="info_blocks">
            <div class="block" id="all_users">
                <p class="block_title">Пользователи</p>
                <p class="block_subtitle">2</p>
            </div>

            <div class="block" id="admins">
                <p class="block_title">Администрация</p>
                <p class="block_subtitle">2</p>
            </div>

            <div class="block" id="editors">
                <p class="block_title">Редакторы</p>
                <p class="block_subtitle">2</p>
            </div>
        </div>
    </header>

    <main>

        <section class="search"></section>

        <section class="accounts">

            <div class="block_account">

                <div class="top_block_account">

                    <div class="account">

                        <div class="photo_account">
                            <img src="../img/admin/avatars/no_avatar.png" alt="">
                        </div>

                        <div class="info_account">

                            <div class="name">
                                <p>Кирилл Малов</p>
                            </div>

                            <div class="role">
                                <p>Администратор</p>
                            </div>

                            <div class="number">
                                <p>+799999999999</p>
                            </div>

                            <div class="email">
                                <p>m.gunn@bk.ru</p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="bottom_block_account">

                    <div class="button_account">

                        <button class="edit_account">
                            <img src="../img/admin/edit_account.svg" alt="">                                                                
                        </button>

                        <button class="ban_account">
                            <img src="../img/admin/ban_account.svg" alt="">                                                                
                        </button>

                    </div>

                </div>

            </div>

        </section>

        <section class="modal_edit_account">
            <div class="form_edit_account">
                <form action="" method="">
                    <div class="top_form_edit">
                        <p>Редактор профиля</p>
                        <button>X</button>
                    </div>

                    <div class="body_form_edit">

                        <div class="login">
                            <p>Логин</p>
                            <input type="text">
                        </div>

                        <div class="named">
                            <p>Имя</p>
                            <input type="text">
                        </div>

                        <div class="surname">
                            <p>Фамилия</p>
                            <input type="text">
                        </div>

                        <div class="email">
                            <p>E-mail</p>
                            <input type="text">
                        </div>

                        <div class="role">
                            <p>Должность</p>
                            <select name="role" id="">
                                <option value="">Администратор</option>
                                <option value="">Директор</option>
                                <option value="">Пользователь</option>
                            </select>
                        </div>

                    </div>

                    <div class="footer_form_edit">
                        <div class="button_form_edit">
                            <button type="submit" id="cancel">Отмена</button>
                            <button type="submit" id="save">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </main>

    <footer>

    </footer>
</body>
</html>