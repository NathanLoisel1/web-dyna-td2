<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            $lignes=$_GET['lignes'];
            $colonnes=$_GET['colonnes'];
        ?>
        <p>
            <a href="?lignes=2&colonnes=2">Tableau 2x2</a><br>
            <a href="?lignes=5&colonnes=5">Tableau 5x5</a><br>
            <a href="?lignes=10&colonnes=8">Tableau 10x8</a><br>
        </p>
        <table border='1'>
            <tbody>
                <?php
                    $gras = false;
                    $rouge = false;
                    for($i=0; $i<$lignes; $i++){
                        if($gras){
                            echo "<tr>";
                            $gras = false;
                        }
                        else{
                            echo "<tr style='font-weight:bold'>";
                            $gras = true;
                        }
                        for($a=0; $a<$colonnes; $a++){
                            if($rouge){
                                echo "<td>{$a} {$i}</td>";
                                $rouge = false;
                            }
                            else{
                                echo "<td style='color:red'>{$a} {$i}</td>";
                                $rouge = true;
                            }
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>