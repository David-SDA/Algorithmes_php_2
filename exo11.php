<h1>Exercice 11</h1>
<p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une 
    chaîne de caractère représentant une date.<br>
    Exemple :<br>
    formaterDateFr("2018-02-23");
</p>
<h2>Résultat</h2>

<?php
    $date = "2018-02-23";

    function formaterDateFr(string $date){
        $jour = array(
            "Mon"=>"Lundi",
            "Tue"=>"Mardi",
            "Wed"=>"Mercredi",
            "Thu"=>"Jeudi",
            "Fri"=>"Vendredi",
            "Sat"=>"Samedi",
            "Sun"=>"Dimanche"
        );
        $mois = array(
            "01"=>"janvier",
            "02"=>"février",
            "03"=>"mars",
            "04"=>"avril",
            "05"=>"mai",
            "06"=>"juin",
            "07"=>"juillet",
            "08"=>"aout",
            "09"=>"septembre",
            "10"=>"octobre",
            "11"=>"novembre",
            "12"=>"décembre"
        );
        $dateAFormaliser = new DateTime($date);
        $result = "";
        $jourAnglais = $dateAFormaliser->format("D");
        $moisChiffre = $dateAFormaliser->format("m");
        foreach($jour as $jAng => $jFr)
        {
            if(strcmp($jourAnglais, $jAng) == 0){
                $result .= $jFr;
            }
        }
        $result .= $dateAFormaliser->format(" d ");
        foreach($mois as $chiffreMois => $moisFrancais){
            if(strcmp($moisChiffre, $chiffreMois) == 0){
                $result .= $moisFrancais;
            }
        }
        $result .= $dateAFormaliser->format(" Y");
        return $result;
    }

    echo formaterDateFr($date);

?>