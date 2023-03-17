<h1>Exercice 2</h1>
<p>
    Soit le tableau suivant :<br>
    $capitales = array<br>
    ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br><br>
    Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays 
    s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
    une fonction personnalisée.<br>
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>
<h2>Résultat</h2>

<?php
    $capitales = array(
        "France"=>"Paris",
        "Allemagne"=>"Berlin",
        "USA"=>"Washington",
        "Italie"=>"Rome"
    );

    echo afficherTableHTML($capitales);

    function afficherTableHTML(array $capitales){
        ksort($capitales);
        /*$result = "<style>
            table{
                border-collapse: collapse;
            }

            thead{
                font-weight: bold;
            }

            thead, tbody, td{
                border: solid 1px #000;
            }

            td{
                padding: 0 10px;
            }
            </style>";*/
        $result = "<table border=1>
                <thead>
                    <tr>
                        <td>Pays</td>
                        <td>Capitale</td>
                    </tr>
                </thead>
                <tbody>";
        foreach($capitales as $pays => $capitale){
            $result .= "<tr>
                            <td>".mb_strtoupper($pays)."</td>
                            <td>".ucfirst($capitale)."</td>
                        </tr>";
        }
        $result .= "</tbody></table>";
        return $result;
    }
?>