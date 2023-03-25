<?php
namespace App\Controller ;

class group
{
    private $id;

    public function __construct()
    {
    }
    public function all_acts($id)
    {
        $parts = preg_split("/(\d+)/", $id, -1, PREG_SPLIT_DELIM_CAPTURE);

        $id = (int)$parts[1]; // convertit le premier élément en entier
        try {
            return json_gen(true, createRequest("SELECT Actis.nom AS activite_nom, Types.nom AS type_nom, Act_Stat.Status 
                                                    FROM Actis 
                                                    INNER JOIN Act_Stat ON Actis.ID_act = Act_Stat.ID_act 
                                                    INNER JOIN Types ON Actis.ID_type = Types.ID_type 
                                                    WHERE Act_Stat.ID_group = $id;"));
        } catch (\Exception $e) { return json_gen(false, $e->getCode() . $e->getMessage()); }
    }

    public function all()
    {
        try {
            return json_gen(true, createRequest("SELECT nom, ID_log FROM `Groups` WHERE 1;"));
        } catch (\Exception $e) { return json_gen(false, $e->getCode() . $e->getMessage()); }
    }

    public function one_act($id_group, $id_acti)
    {
        $parts = preg_split("/(\d+)/", $id_group, -1, PREG_SPLIT_DELIM_CAPTURE);

        $id = (int)$parts[1]; // convertit le premier élément en entier
        try {
            return json_gen(true, createRequest("SELECT Actis.ID_act AS ID, Actis.nom AS activite_nom, Act_Stat.Status
                                                    FROM Actis
                                                    INNER JOIN Act_Stat ON Actis.ID_act = Act_Stat.ID_act
                                                    WHERE Actis.ID_type = $id_acti AND Act_Stat.ID_group = $id;"));
        } catch (\Exception $e) { return json_gen(false, $e->getCode() . $e->getMessage()); }
    }

    public function type_ency($id_type)
    {
        try {
            return json_gen(true, createRequest("SELECT Nom, Tuto, ID_ency 
                                                    FROM `Ency` 
                                                    WHERE ID_type = $id_type;"));
        } catch (\Exception $e) { return json_gen(false, $e->getCode() . $e->getMessage()); }
    }

    public function all_ency()
    {
        try {
            return json_gen(true, createRequest("SELECT Nom, Tuto, ID_ency 
                                                    FROM `Ency` 
                                                    WHERE 1;"));
        } catch (\Exception $e) { return json_gen(false, $e->getCode() . $e->getMessage()); }
    }

    public function child($id_group)
    {
        try {
            return json_gen(true, createRequest("SELECT Enfants.Nom AS enfant_nom, Groups.nom AS groupe_nom FROM Enfants INNER JOIN Groups ON Enfants.ID_log = Groups.ID_log WHERE Groups.ID_log = '$id_group';"));
        } catch (\Exception $e) { return json_gen(false, $e->getCode() . $e->getMessage()); }
    }

    public function connect($username, $mdp)
    {
        try {
            return json_gen(true, createRequest("SELECT ID_log FROM `Groups` WHERE mdp = '$mdp' AND nom = '$username';"));
        } catch (\Exception $e) { return json_gen(false, $e->getCode() . $e->getMessage()); }
    }
}