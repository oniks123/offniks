<pre>

    <? 

        require ("../core/bd.php");

        $add_Composition = $_POST["Composition"];
        $add_price = $_POST["price"];
        $add_type = $_POST["type"];
        $new_img = $_FILES["img"];

        var_dump($new_img["name"]);

        if (empty($add_Composition) || empty($add_price) || empty($new_img["name"])) 
        {
            header("location: ../menu/add-menu.php?error=add");
        }
        else {
            $tmpName = $new_img["tmp_name"];

            $nameimg = time().$new_img["name"];

            $DirSave = "../img/menu/$add_type/".$nameimg;

            $save = move_uploaded_file($tmpName, $DirSave);

            $add_product = mysqli_query($bd, "INSERT INTO `menu` 
            (`id`, `Composition`, `img`, `price`, `type`) VALUES 
            (NULL, '$add_Composition', '$nameimg', '$add_price', '$add_type')");

            header("location: ../menu/".$_POST["type"] .".php");
        }

    ?>

</pre>