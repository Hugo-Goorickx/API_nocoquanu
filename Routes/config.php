<?php

require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();
$controller = new \App\Controller\group();

$router->get('/act/{$id}/all', function ($id) use ($controller) {
    echo $controller->all_acts($id);
});

$router->get('/gro/all', function () use ($controller) {
    echo $controller->all();
});

$router->get('/act/{$id}/{$id_act}', function ($id, $id_act) use ($controller) {
    echo $controller->one_act($id, $id_act);
});

$router->get('/enc/all', function () use ($controller){
    echo $controller->all_ency();
});

$router->get('/enc/{$id_type}', function ($id_type) use ($controller){
    echo $controller->type_ency($id_type);
});

$router->get('/chi/{$id_group}', function ($id_group) use ($controller){
    echo $controller->child($id_group);
});

$router->get('/con/{$name}/{$mdp}', function ($name, $mdp) use ($controller){
    echo $controller->connect($name, $mdp);
});

$router->run();


/*
 * /act/{$id}/all
 *      Toutes les activites liees au groupe
 *      Nom, type et le status
 *
 * /act/{$id}/{$id_act}
 *      Toutes les activite liee au groupe et au type
 *      L'ID, le nom et le status
 *
 * /enc/{$id_type}
 *      Tous les tutos lies au type
 *      ID_ency, nom et le tuto
 *
 * /enc/all
 *      Tous les tutos sans distinction
 *      ID_ency, nom, tuto
 */