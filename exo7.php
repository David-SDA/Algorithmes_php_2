<h1>Exercice 7</h1>
<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
    dans le tableau associatif si la case est cochée ou non.<br>
    Exemple :<br>
    genererCheckbox($elements);
</p>
<h2>Résultat</h2>

<?php
    $elements = array(
        "1"=>"Choix 1",
        "2 coche"=>"Choix 2",
        "3"=>"Choix 3"
    );

    echo genererCheckbox($elements);

    function genererCheckbox(array $elements){
        $result = "<fildset>";
        foreach($elements as $coche => $choix){
            $lowerUnderscoreChoix = mb_strtolower(str_replace(' ', '_', $choix));
            $result .= "<input type='checkbox' id='$lowerUnderscoreChoix' name='$lowerUnderscoreChoix' ";
            if(str_contains($coche, "coche")){
                $result .= "checked>";
            }
            else{
                $result .= ">";
            }
            $result .= "<label for='$lowerUnderscoreChoix'>$choix</label><br>";
        }
        $result .= "</fieldset>";
        return $result;
    }
?>