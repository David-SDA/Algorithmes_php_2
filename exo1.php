<h1>Exercice 1</h1>
<p>
    Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
    caractère passée en argument en majuscules et en rouge.<br>
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>
<h2>Résultat</h2>

<?php
    function convertirMajRouge(string $texte){
        $texte_majuscule = mb_strtoupper($texte);
        echo "<span style='color : red'>$texte_majuscule</span>";
    }
    convertirMajRouge("Mon texte en paramètre");
?>