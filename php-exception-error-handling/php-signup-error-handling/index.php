<html>
    <head>
        <meta charset="UTF-8" />
        <title></title>
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
    </body>
</html>