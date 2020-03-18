<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $message = $_GET['message'];
            echo("Salut $message !");
        ?>
        <p>
            <a href="/tp1NL/hello.php?message=Coucou">Message 1</a>
            <a href="/tp1NL/hello.php?message=Salut">Message 2</a>
            <a href="/tp1NL/hello.php?message=Bienvenue">Message 3</a>
        </p>
    </body>
</html>