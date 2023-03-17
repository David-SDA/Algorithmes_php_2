<h1>Exercice 15</h1>
<p>
    En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
    adresse e-mail a le bon format.<br>
    L'adresse contact@elan est une adresse e-mail invalide.<br>
</p>
<h2>Résultat</h2>

<?php
    $email1 = "elan@elan-formation.fr";
    $email2 = "contact@elan";

    echo verifierEmail($email1);
    echo verifierEmail($email2);

    function verifierEmail(string $email){
        $result = "";
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result .= "L'adresse $email est une adresse e-mail valide<br>";
        }
        else{
            $result .= "L'addresse $email est une adresse invalde<br>";
        }
        return $result;
    }
?>