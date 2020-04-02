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
};

function element($titre, $contenu, $niveau=1){
    $html = "<h" . $niveau . ">" . $titre . "</h" . $niveau . "> <div>" . $contenu . "</div>";
    return $html;
}

function parseElement($elements){
    $code = '';
    for($a=0; $a<count($elements); $a++){
        $niveau = $elements[$a]['niveau'] ?? "1";
        $code .= element($elements[$a]["titre"], $elements[$a]["contenu"], $niveau);
    }
    return $code;
}

function wordCount($phrase){
    return str_word_count($phrase);
}

function charCount($s, $c=NULL){
    if($c == null){
            return strlen($s);
    }
    else{
        return substr_count($s, $c);
    }
}



















//pour le console.log()

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}
?>