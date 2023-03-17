<h1>Exercice 4</h1>
<p>
    A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
    le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s'ouvrir dans un 
    nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
    On admet que l'URL de la page Wikipédia de la capitale adopte la forme :<br>
    https://fr.wikipedia.org/wiki/<br>
    Le tableau passé en argument sera le suivant :<br>
    $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

</p>
<h2>Résultat</h2>

<?php
    $capitales = array(
        "France"=>"Paris",
        "Allemagne"=>"Berlin",
        "USA"=>"Washington",
        "Italie"=>"Rome",
        "Espagne"=>"Madrid"
    );

    echo afficherTableWikiHTML($capitales);

    function afficherTableWikiHTML(array $capitales){
        asort($capitales);
        $result = "<table border=1>
                        <thead>
                            <tr>
                                <td>Pays</td>
                                <td>Capitale</td>
                                <td>Lien wiki</td>
                            </tr>
                        </thead>
                        <tbody>";
                        foreach($capitales as $pays => $capitale){
                            $result .= "<tr>
                                            <td>".mb_strtoupper($pays)."</td>
                                            <td>".ucfirst($capitale)."</td>
                                            <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a></td>
                                        </tr>";
                        }
        $result .= "</tbody></table>";
        return $result;
    }
?>