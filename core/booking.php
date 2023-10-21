<pre>

   <?php

      require ("bd.php");  

      session_start();

      $user_id = $_SESSION["uid"];
      $data = $_POST["date"];
      $people = $_POST["people"];
      $time = $_POST["time"];
      $comments = $_POST["comments"];
      $name = $_POST["name"];

      var_dump ($time);

      $booking = mysqli_query($bd, "INSERT INTO `bookings` (`id`, `data`, `person`, `time`, `comments`, `name`, `owner`, `Status`, `Reason`) 
      VALUES (NULL, '$data', '$people', '$time', '$comments', '$name', '$user_id', 'Одобрено', '')");

      if (!empty($booking)) {
         // header("location: ../index.php");
      }
         // header("location: ../index.php?error-booking");
   ?>

</pre>