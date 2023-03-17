<h1>Exercice 9</h1>
<p>
    Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de 
    valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
    Exemple :<br>
    afficherRadio($nomsRadio);
</p>
<h2>Résultat</h2>

<?php
    $nomsRadio = array("Monsieur", "Madame", "Mademoiselle");

    echo afficherRadio($nomsRadio);

    function afficherRadio(array $nomsRadio){
        $result = "<fildset>";
        foreach($nomsRadio as $diminutif){
            $lowerDiminutif = mb_strtolower($diminutif);
            $result .= "<input type='radio' id='$lowerDiminutif' name='choix' value='$lowerDiminutif'>";
            $result .= "<label for='$lowerDiminutif'>$diminutif</label><br>";
        }
        $result .= "</fieldset>";
        return $result;
    }
?>