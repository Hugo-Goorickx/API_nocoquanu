
## API Reference

    Principal lien :
        https://test.hugorickx.tech

-----------

### Avoir toutes les equipes

```http
  GET /gro/all
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| - | - | - |

#### Return:
Toutes les equipes avec leur nom et leur id

-----------

### Avoir toutes les activites

```http
  GET /act/{$id}/all
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| $id | String | Id complete d'un groupe |

#### Return:
Toutes les activites d'une equipe et les status pour chaque activite.

-----------

### Avoir toutes les activites

```http
  GET /act/{$id}/{$id_act}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| $id | String | Id complete d'un groupe |
| $id_act | int | Id d'un type |

#### Return:
Toutes les activites d'une equipe et les status pour chaque activite limite a un type.

-----------

### Avoir toutes les activites

```http
  GET /enc/{$id_type}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| $id_type | int | Id d'un type |

#### Return:
Tous les tutos d'un type.

-----------

### Avoir toutes les activites

```http
  GET /enc/all
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| - | - | - |

#### Return:
Tous les tutos.

-----------

### Avoir toutes les activites

```http
  GET /chi/{$id_group}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| $id_group | String | Id complete d'un groupe |

#### Return:
Tous les enfants d'un groupe

-----------

### Avoir toutes les activites

```http
  GET /con/{$name}/{$mdp}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| $name | String | Nom simple du groupe |
| $mdp | String | Mot de passe du groupe |

#### Return:
L'id complet du groupe
## Auteurs
Moi
## Notes de projets
L'API est tres sommaire et doit encore evoluer