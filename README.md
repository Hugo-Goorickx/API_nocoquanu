# API
<p align="center">
  <a href="#en-premier">En premier</a> •
  <a href="#comment-l-utiliser">Comment l'utiliser</a> •
  <a href="#fabrique-avec">Fabriqué avec</a> •
  <a href="#auteurs">Auteurs</a> •
  <a href="#notes-de-projets">Notes de projets</a> 
</p>



API sommaire utilisee pour un projet de Hackathon

## Comment l utiliser
/act/{$id}/all

     $id (string) = id groupe "blabla1"
     Toutes les activites liees au groupe
     Nom, type et le status

/act/{$id}/{$id_act}

     $id (string) = id groupe "blabla1"
     $id_act (int) = id type
     Toutes les activite liee au groupe et au type 
     L'ID, le nom et le status

/enc/{$id_type}

     $id_type (int)
     Tous les tutos lies au type
     ID_ency, nom et le tuto

/enc/all

      Tous les tutos sans distinction
      ID_ency, nom, tuto


/chi/{$id_group}

      $id_groupe (int)
      Retourne tous les enfants d'un groupe
      Nom

/con/{$name}/{$mdp}

      $name (string) = nom du groupe
      $mdp (string) = mdp du groupe
      Retourne l'id complet du groupe pour les prochaines requetes
      Id groupe

## Auteurs
Moi
## Notes de projets
L'API est tres sommaire et doit encore evoluer