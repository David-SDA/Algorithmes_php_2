<h1>Exercice 10</h1>
<p>
    En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
    complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
    de validation (submit).
</p>
<h2>Résultat</h2>

<?php
    

    $nomsInputs = array("Nom", "Prénom", "Adresse", "Email", "Ville", "Sexe");
    $choixFormation = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");

    echo formulaireComplet($nomsInputs, $choixFormation);
    
    /*On reprend la fonction de l'exercice 5*/
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

    /*On reprend la fonction de l'exercice 9*/
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

    /*Fonction finale*/
    function formulaireComplet(array $nomsInput, array $choixFormation){
        $result = "";
        echo afficherInput($nomsInput);
        $result .= "<br>";
        echo afficherRadio($choixFormation);
        $result .= "<input type='submit' value='Envoyer'>";
        return $result;
    }
?>