# InfoScience

## Prérequis 
Pour pouvoir utiliser le code source d'InfoScience il faudra installer [Symfony](https://symfony.com/download) ainsi que [composer](https://getcomposer.org/).

## Installation
Dans un premier temps nous avons besoin d'installer les dépendances utilisé par symfony avec composer. Pour cela il vous suffit d'ouvir une invite de commande, de vous placer dans le dossier d'infoscience récupéré sur GitHub et de valider la commande: 

> ``` composer install ```

### Mise en place de la base données
 1. Pour la suite il vous faudra une base de données. Si vous n'avez pas de serveur à disposition vous pouvez utiliser [WampServer](http://www.wampserver.com/).
 Vous pouvez accéder à votre base de données [ici](http://localhost/phpmyadmin/) à l'aide du SGBD **PhpMyAdmin** après avoir lancer wamp et que l'icone soit verte dans votre barre de tâches.

 Il vous faudra ensuite importer la base de données que vous trouverez [ici](https://drive.google.com/uc?export=download&id=1yf-_HN91U871cnQk8fkE6JyiEzgP-G3r)

 2. Pour ce faire aller sur [votre interface](http://localhost/phpmyadmin/).Pour vous connecter pour la première fois vous devez vous connecter avec les identifiants Admin. L'identifiant est **root** et aucun mot de passe. Maintenant créez une nouvelle base de données en cliquant sur le bouton **Nouvelle Base de données** en haut du menu droit.
 nommer la base donnée comme vous le souhaiter puis valider.
 
 3. cliquer sur votre base données pour la sélectionner. Ensuite cliquer sur le bouton **Importer** dans le menu Horizontal en haut de l'écran.
 cliquer sur **Choose File** et sélectionner la base de données que je vous ai fourni. Cliquer sur le bouton **Executer** en bas de la page.
 
### Configuration de symfony 
  Maintenant que que la base de données est opérationnel, il faut configurer symfony pour qu'il puisse y accéder.
  pour ce faire il faut éditer le fichier **.env** à la racine du projet. Vous devez modifier la ligne ci dessous : 
  
  > ``` DATABASE_URL=mysql://Identifiant:MotDePasse@127.0.0.1:3306/NomDeLaBaseDeDonnées  ```
  
  Note : **127.0.0.1:3306** correspond à l'adresse d'accès de la base de données, Si vous n'utilisez pas wamp il faudra la modifier, sinon vous n'avez qu'a modifier le reste de la ligne.
  
  
### Utilisation 

Vous êtes maintenant prêt à accéder au site. Il vous suffit de taper dans une invite de commande, en étant dans le dossier d'InfoScience la commande suivante:

> ``` php bin/console s:r ```
 
 Cela peux prendre un instant. Lorsque vous verrez du text vert s'afficher dans votre invite de commande c'est que tout à fonctionné correctement.
 Vous pouvez enfin accéder à InfoScience [ici](http://127.0.0.1:8000/)
