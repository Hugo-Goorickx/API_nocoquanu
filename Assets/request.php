<?php

namespace App\Controller ;

function createRequest($request)
{
    try                 
    { 
        $bdd = new \PDO('mysql:host=127.0.0.1;dbname=bouh', 'root', '');
        $ps= $bdd->prepare($request);
        $ps->execute();
        return $ps->fetchAll(\PDO::FETCH_ASSOC);
    }
    catch(\Exception $e) 
    { 
        throw new \Exception('ici Erreur : '.$e->getMessage());
    }
}
?>

