<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            include("fonctions.php");
            $table = createTable($_GET['lignes'] ?? '5', $_GET['colonnes'] ?? '5');
            echo $table;
        ?>
        
        <p>
            <form method="GET">
                <label>Lignes: </label>
                <input type="number" value="5" name="colonnes"><br>
                <label>Colonnes: </label>
                <input type="numer" value="5" name='lignes'>
                <input type="submit" value="Valider">
            </form>
        </p>
    </body>
</html>