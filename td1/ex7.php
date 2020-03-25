<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>

<body>
    <div>
        <textarea rows="4" cols="50" name="texte" form="form">
            Super le php !
        </textarea>
        <form method="post" id="form">
            <select id="type" name="choix">
                <option value="mots" name="mots">Nombre de mots</option>
                <option value="lettres" name="lettres">Nombre de lettres</option>
            </select>
            Caractère: <input type="text" name="caractère">
            <input type="submit" value="Compter">
        </form>

    </div>
    <div>
        <p>Résultat:</p>
        <?php
            include("fonctions.php");
            $texte = $_POST["texte"] ?? null;
            $choix = $_POST["choix"] ?? null;
            $char = $_POST["caractère"] ?? null;
            if($choix == "mots"){
                echo wordCount($texte);
            }
            else{
                if($char == null){
                    echo charCount($texte);
                }
                else{
                    echo charCount($texte, $char);
                }
            }
        ?>

    </div>
</body>

</html>
