<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>

<body>
    <div>
        //test
        <textarea rows="10" cols="100" name="texte" form="form">
            Isdem diebus Apollinaris Domitiani gener, paulo ante agens palatii Caesaris curam, ad Mesopotamiam missus a socero per militares numeros immodice scrutabatur, an quaedam altiora meditantis iam Galli secreta susceperint scripta, qui conpertis Antiochiae gestis per minorem Armeniam lapsus Constantinopolim petit exindeque per protectores retractus artissime tenebatur.
        </textarea>
        <form method="post" id="form">
            <select name="fonction" size="10">
                <option value="1e">1e lettre en maj</option>
                <option value="maj">Majuscule</option>
                <option value="min">Minuscule</option>
                <option value="br">ligne->BR</option>
                <option value="1emots">1e lettre en maj de tous les mots</option>
                <option value="sha1">sha1</option>
                <option value="md5">md5</option>
                <option value="url">URL encode</option>
                <option value="entite">Entité HTML</option>
                <option value="cesure">Césure chaine</option>
            </select>
            <input type="submit" value="Générer">
        </form>

    </div>
    <div>
        <p>Résultat:</p>
        <?php
            include("fonctions.php");
            $texte = $_POST["texte"] ?? null;
            $fonction = $_POST["fonction"] ?? null;
            if($texte == null || $fonction == null){
                echo "Il y a un champ vide";
            }
            else{
                if($fonction == "1e"){
                    echo ucfirst($texte);
                }
                if($fonction == "maj"){
                    echo strtoupper($texte);
                }
                if($fonction == "min"){
                    echo strtolower($texte);
                }
                if($fonction == "br"){
                    echo nl2br($texte);
                }
                if($fonction == "1emots"){
                    echo ucwords($texte);
                }
                if($fonction == "sha1"){
                    echo sha1($texte);
                }
                if($fonction == "md5"){
                    echo md5($texte);
                }
                if($fonction == "url"){
                    echo urlencode($texte);
                }
                if($fonction == "entite"){
                    echo htmlentities($texte);
                }
                if($fonction == "cesure"){
                    echo wordwrap($texte);
                }
            }
            
        ?>

    </div>
</body>

</html>
