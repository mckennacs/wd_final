<!DOCTYPE html>
<html>
    <head>
        <title>Form Receipt</title>
    </head>
    <body>
        <h1>
            Form Receipt:
        </h1>

        <p>First Name:<?php echo $_POST["first_name"]; ?></p>
        <p>Last Name:<?php echo $_POST["last_name"]; ?></p>
        <p>Email:<?php echo $_POST["email"]; ?></p>
        <p>Password:<?php echo $_POST["password"]; ?></p>
        <p>Birthday:<?php echo $_POST["birthday"]; ?></p>
        <p>Birthday Email:<?php echo $_POST["bmail"]; ?></p>
    </body>
</html>