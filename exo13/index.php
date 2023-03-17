<h1>Exercice 13</h1>
<p>
    Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
    vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
    des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un 
    véhicule.<br>
    v1 ➔ "Peugeot","408",5<br>
    v2 ➔ "Citroën","C4",3<br>
    Coder l'ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de tests pour vérifier la cohérence de la classe Voiture.<br>
    Bonus : ajouter une méthode ralentir(vitesse) dans la classe Voiture.
</p>
<h2>Résultat</h2>

<?php
    function chargerClasse($classe){
        require $classe . '.class.php';
        }
    spl_autoload_register('chargerClasse');

    $v1 = new Voiture("Peugeot", "408", 5);
    $v2 = new Voiture("Citroën", "C4", 3);
    echo $v1->infoVehicule();
    echo $v2->infoVehicule();
    echo $v1 . "<br>";
    echo $v2 . "<br>";

    $v1->demarrer();
    $v1->accelerer(50);
    $v1->ralentir(25);
    $v1->ralentir(100);
    $v2->demarrer();
    $v2->stopper();
    $v2->accelerer(20);
    $v2->ralentir(100);
    
    echo "La vitesse du véhicule " . $v1->getMarque() . " " . $v1->getModele() . " est de : " . $v1->getVitesseActuelle() . " km / h<br>";

    echo "La vitesse du véhicule " . $v2->getMarque() . " " . $v2->getModele() . " est de : " . $v2->getVitesseActuelle() . " km / h<br>";

    echo "<br>";
    $tab = array($v1, $v2);
    for($i=1; $i<=count($tab); $i++){
        echo "<br>Infos véhicule $i<br>
        *******************<br>";
        echo $tab[$i-1]->infoDetailVehicule();
    }
?>