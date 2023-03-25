<?php

namespace App\Controller ;

function createRequest($request)
{
    try                 
    { 
//        $bdd = new \PDO('mysql:host=127.0.0.1;dbname=bouh', 'root', '');
        $bdd = new \PDO('mysql:host=sql929.main-hosting.eu;dbname=u716273791_nocoquanu;charset=utf8', 'u716273791_user', 'K3orOZDj38b^');

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

