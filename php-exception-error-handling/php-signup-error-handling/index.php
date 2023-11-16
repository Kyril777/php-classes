<!DOCTYPE html>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Register</h2>
        <form action="includes/register.inc.php" method="POST">
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="text" name="email" placeholder="E-mail Address">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Register</button>
        </form>
        <?php
          $fullUrl = "http://$_SERVER[HTTP_POST]$_SERVER[REQUEST_URI]";

          if (strpos($fullUrl, "signup=empty") == true) {
            echo "<p class="error">Not all fields have been filled.</p>";
          } elseif (strpos($fullUrl, "signup=char") == true) {
            echo "<p clas="error">There are invalid characters.</p>";
          } elseif (strpos($fullUrl, "signup=email") == true) {
            echo "<p class="error">You have entered an invalid email address.</p>";
          } elseif (strpos($fullUrl, "signup=success") == true) {
            echo "<p class="success">Congratulations!</p>";
          }
        ?>
    </body>
</html>
