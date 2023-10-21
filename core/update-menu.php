<pre>

    <? 

        require ("../core/bd.php");

        $product_id = $_POST["id"];
        $new_composition = $_POST["Composition"];
        $new_price = $_POST["price"];
        $new_img = $_FILES["img"];
        $type = $_POST["type"];

        var_dump($_POST);

        if ($new_img["name"] == "") 
        {
            $update = (mysqli_query($bd, 
            "UPDATE `menu` SET 
            `Composition` = '$new_composition',
            `price` = '$new_price' 
            WHERE `menu`.`id` = '$product_id'"));

            if ($update) {
                header("location: ../menu/".$_POST["type"] .".php");
            }
            else {
                header("location: ../menu.php?error=update");
            }

        } elseif ($new_img["type"] != "image/png" && $new_img["type"] != "image/jpeg" && $new_img["type"] != "image/jpg"){
            header("location: ../menu.php?error=typeimg");
        }
        else {
            $tmpName = $new_img["tmp_name"];

            $nameimg = time().$new_img["name"];

            $DirSave = "../img/menu/$type/".$nameimg;

            $save = move_uploaded_file($tmpName, $DirSave);

            $update = mysqli_query($bd, "UPDATE `menu` SET 
            `Composition` = '$new_composition', 
            `img` = '$nameimg', 
            `price` = '$new_price'
            WHERE `menu`.`id` = '$product_id'");

            if ($update) {
                header("location: ../menu/".$_POST["type"] .".php");
            }

            else {
                header("location: ../menu/edit-menu.php?error=update");
            } 

        }

    ?>

</pre>