<h1>Exercice 8</h1>
<p>
    Soit l'URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
    Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.<br>
    Exemple :<br>
    repeterImage($url,4);
</p>
<h2>Résultat</h2>

<?php
    $url = "http://my.mobirise.com/data/userpic/764.jpg";
    
    echo repeterImage($url, 4);

    function repeterImage(string $url, int $fois){
        $result = "";
        for($i = 0; $i < $fois; $i++){
            $result .= "<img src='$url'>";
        }
        return $result;
    }
?>