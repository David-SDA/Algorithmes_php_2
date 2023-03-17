<h1>Exercice 3</h1>
<p>
    Afficher un lien hypertexte permettant d'accéder au site d'Elan Formation. 
    Le lien devra s'ouvrir dans un nouvel onglet (_blank).
</p>
<h2>Résultat</h2>

<?php
    $site = "https://elan-formation.eu/accueil";

    echo site($site);

    function site(string $web){
        $result = "<a href='$web' target='_blank'>$web</a>";
        return $result;
    }
?>