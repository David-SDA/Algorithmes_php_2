<h1>Exercice 5</h1>
<p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
    précisant le nom des champs associés.<br>
    Exemple :<br>
    $nomsInput = array("Nom","Prénom","Ville");<br>
    afficherInput($nomsInput);
</p>
<h2>Résultat</h2>

<?php
    $nomsInput = array("Nom", "Prénom", "Ville");

    echo afficherInput($nomsInput);

    function afficherInput(array $nomInput){
        $result = "<form action='#' method='POST'>";
        foreach($nomInput as $input){
            $lowerInput = mb_strtolower($input);
            $result .= "<label for='$lowerInput'>$input</label><br>
                        <input type='text' name='$lowerInput' id='$lowerInput'><br>";
        }
        $result .= "</form>";
        return $result;
    }
?>