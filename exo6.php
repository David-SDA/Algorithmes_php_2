<h1>Exercice 6</h1>
<p>
    Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
    de valeurs.<br>
    Exemple :<br>
    $elements = array("Monsieur","Madame","Mademoiselle");<br>
    alimenterListeDeroulante($elements);
</p>
<h2>Résultat</h2>

<?php
    $element = array("Monsieur", "Madame", "Mademoiselle");

    echo alimenterListeDeroulante($element);

    function alimenterListeDeroulante(array $elements){
        $result = "<select name='diminutif' id='diminutif'>";
        foreach($elements as $diminutif){
            $lowerDiminutif = mb_strtolower($diminutif);
            $result .= "<option value='$lowerDiminutif'>$diminutif</option>";
        }
        $result .= "</select>";
        return $result;
    }
?>