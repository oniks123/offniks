<pre>

   <? 

      require ("bd.php");

      $tmp_username = $_POST["username"];
      $tmp_login = $_POST["login"];
      $tmp_pass = md5($_POST["password"]);
      $tmp_number = $_POST["number"];
      $tmp_mail = $_POST["mail"];

      $reg_user = mysqli_query($bd,"INSERT INTO `users` (`id`, `name`, `login`, `pass`, `number`, `email`, `role`) VALUES (NULL, '$tmp_username', '$tmp_login', '$tmp_pass', '$tmp_number', '$tmp_mail', 'user')");
      
      if (!$reg_user) {
         header("location: ../autoriz.php?error=reg");
      }
         header("location: ../index.php");
   ?>

</pre>