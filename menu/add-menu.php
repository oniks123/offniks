<?
   session_start();

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
    <title>Добавить меню</title>
    <link rel="stylesheet" href="../css/add-menu.css">
</head>
<body>

    <? require ("../core/bd.php"); ?>

    <main>

        <h2>Добавление в меню</h2>

        <form action="../core/add-menu.php" method="post" enctype="multipart/form-data">

            <span class="exit"><a href="../menu.php">&#10006;</a></span>

            <input type="text" require name="Composition" title="описание" value="" placeholder="Описание" >

            <input type="number" require name="price" title="цена" placeholder="Цена" >

            <label class="time-box">

                <input type="file" name="img" accept=".png,.jpg,.jpeg" require>
                <span class="time-container">Загурить фото</span>
    
            </label>

            <select name="type" id="" require> 
                <option value="breakfast">Завтрак</option>
                <option value="Snacks">Закуски</option>
                <option value="Salads">Салаты</option>
                <option value="Soups">Супы</option>
                <option value="Hotter">Горячее</option>
                <option value="Pizza">Пицца</option>
                <option value="Side-dishes">Гарниры</option>
                <option value="Asia">Азия</option>
                <option value="Desserts">Десерты</option>
                <option value="Drinks">Напитки</option>
            </select>

            <button type="submit">Добавить в меню</button>

        </form>

    </main>

</body>
</html>