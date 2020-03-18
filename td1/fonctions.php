<?php
function createTable($lignes, $colonnes){
    $gras = false;
    $rouge = false;
    $table = "<table border='1'><tbody>";
    for($i=0; $i<$colonnes; $i++){
        if($gras){
            $table .= "<tr>";
            $gras = false;
        }
        else{
            $table .= "<tr style='font-weight:bold'>";
            $gras = true;
        }
        for($a=0; $a<$lignes; $a++){
            if($rouge){
                $table .= "<td>{$a} {$i}</td>";
                $rouge = false;
             }
            else{
                 $table .= "<td style='color:red'>{$a} {$i}</td>";
                 $rouge = true;
            }
         }
         $table .= "</tr>";
    }
    $table .= "</tbody></table>";
    return $table;    
}
?>