<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $message=$_POST['message']?? "Aucun message";
            $size=$_POST['size']?? "50";
            $color=$_POST['color']?? "red";


            echo "<div style='font-size: {$size}px; color: {$color};'>{$message}</div>";
        ?>
        
        <p>
            <a href="?message=Premier message !&color=red&size=15">Premier message</a><br>
            <a href="?message=Second message !&color=green&size=30">Deuxieme message</a><br>
            <a href="?message=Third message !&color=blue&size=50">3e message</a>
        </p>
        <p>
            <?php
                $message=$_POST['message']?? "Aucun message";
                $sizeplus=$_POST['size'] + 5 ?? "50";
                $sizemoins=$_POST['size'] - 5 ?? "50";
                $color=$_POST['color']?? "red";
                echo "<a href='?message={$message}&color={$color}&size={$sizeplus}'>+&nbsp;&nbsp;&nbsp;</a>";
                echo "<a href='?message={$message}&color={$color}&size={$sizemoins}'>-</a>";
            ?>
        </p>
        <p>
            <form method="POST">
                <label>Taille: </label>
                <input type="number" name='size'>
                <label>Couleur: </label>
                <input type="input" name='color'>
                <label>Message: </label>
                <input type="textarea" name='message'>
                <input type="submit" value="Valider">
            </form>
        </p>
    </body>
</html>