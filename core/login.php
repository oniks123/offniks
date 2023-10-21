<pre>

   <? 
      require ("bd.php");

      $tmp_login = $_POST["login"];
      $tmp_pass =  md5($_POST["password"]);

      $check = mysqli_fetch_assoc( mysqli_query($bd,"SELECT * FROM `users` WHERE `login` LIKE '$tmp_login' AND `pass` LIKE '$tmp_pass'"));

      if (!empty($check)){

         session_start();

         $_SESSION["uid"] = $check["id"];

         header("location: ../index.php");
      }
      else
        header("location: ../autoriz.php?error=login");
   ?>

</pre>


