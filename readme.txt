description du projet : Le projet va consister a avoir des evenements dans ces evenements nos salarié peuvent entrer un pseudo et y rentrer un commentaire on aura donc pour chaque evenment 
un commentaire que l'on va pouvoir crée 






detail technique :



document event.sql exporter a l'aide de php my admin elle contiendra donc la base de donnée en SQL 

utilisation d'un container docker a l'aide de docker-compose.yml qui va nous permettre configurer le service docker pour exécuter des conteneurs pour PHP, MySQL et phpMyAdmin.

require once,  est utilisée pour inclure le contenu d'un fichier PHP

__DIR__,  représente le chemin absolu du répertoire du fichier dans lequel elle est utilisée. Elle renvoie le répertoire contenant le fichier lui-même, sans inclure le nom du fichier.




Ports utilisé: 

le port utilisé sera donc le port 3306 il faudra verifier qu'elle n'es pas deja utiliser pour mysql 
le port 8080 sera utiliser pour le php my admin 
puis je vais dans localhost pour aller sur la premiere page d accueil




controleur accueil: 

Dans la classe ControleurAccueil a une propriété privée $event et sera utilisée pour interagir avec les objets de la classe Event.

La méthode __construct() lui est le constructeur de la classe. Elle sera donc appelée lorsqu'un objet ControleurAccueil est créé.

 Dans ce constructeur, un objet $event est instancié. 
 
 Cela va nous permettre d'avoir une instance prête à l'emploi de la classe Event pour être utilisée dans les autres méthodes de la classe.

La méthode accueil() elle sera utilisée pour afficher la liste de tous les événements du blog. 

Elle utilisera donc l'objet $event pour ensuite récupérer tous les événements avec l'aide de la méthode getEvents().

 Ensuite, elle va crée un objet Vue avec le nom "Accueil" et par la suite génerer la vue en lui transmettant les données des événements.








 controleur event :

 Dans la classe ControleurEvent va avoir deux propriétés qui seront privées :
 
  $event de type Event et $commentaire de type Commentaire. 
 
 Ces propriétés vont etre utilisées pour interagir avec les objets de classe Event et Commentaire.

La méthode __construct() est le constructeur de la classe. Elle sera appelée lorsqu'un objet ControleurEvent est créé. 

Dans ce constructeur, deux objets sont instanciés : $event et $commentaire. 

Cela permet d'avoir des instances prêtes à l'emploi des classes Event et Commentaire pour être utilisées dans les autres méthodes de la classe.

La méthode event($idEvent) est utilisée pour afficher les détails d'un événement spécifié par son identifiant $idEvent.

 Elle utilise l'objet $event pour récupérer les informations de l'événement à partir de la méthode getEvent($idEvent). 
 
 Ensuite, elle utilise l'objet $commentaire pour récupérer les commentaires associés à cet événement à l'aide de la méthode getCommentaires($idEvent).
 
  Enfin, elle crée un objet Vue avec le nom "Event" et génère la vue en lui transmettant les données de l'événement et des commentaires.

La méthode commenter($auteur, $contenu, $idEvent) est utilisée pour ajouter un commentaire à un événement spécifié. Elle prend en paramètres le nom de l'auteur, 

le contenu du commentaire et l'identifiant de l'événement. 

La méthode utilise l'objet $commentaire pour ajouter le commentaire à l'événement à l'aide de la méthode ajouterCommentaire($auteur, $contenu, $idEvent).

 Ensuite, elle appelle la méthode event($idEvent) pour actualiser l'affichage des détails de l'événement.
 
 
 
 routeur: il  est responsable de la gestion des requêtes entrantes et du routage vers les contrôleurs appropriés

 La méthode __construct() est le constructeur de la classe. Elle est appelée lorsqu'un objet Routeur est créé.
 
 Dans ce constructeur, les objets $ctrlAccueil et $ctrlEvent sont instanciés.

 Cela permet d'avoir des instances prêtes à l'emploi des classes ControleurAccueil et ControleurEvent pour être utilisées dans la méthode routerRequete().


 event.php :
 
  Le code va représenter une classe PHP appelée Event qui hérite de la classe Modele.
 
  La classe Event va donc etre utilisée pour interagir avec la table "T_EVENT" de la base de données


 La classe Event aura deux méthodes publiques : getEvents() et getEvent($idEvent).

La méthode getEvents() est utilisée pour par la suite récupérer la liste de tous les événements du blog.

 Elle exécute une requête SQL qui sélectionne les colonnes EVENT_ID, EVENT_DATE, EVENT_TITRE et EVENT_CONTENU de la table "T_EVENT".
 
  La méthode executerRequete($sql) va etre appelée pour exécuter la requête SQL et renvoyer le résultat.

La méthode getEvent($idEvent) est utilisée pour récupérer les informations sur un événement spécifié par son identifiant $idEvent.

 Elle exécute une requête SQL similaire à getEvents(), mais avec une clause WHERE pour filtrer les résultats en fonction de l'identifiant de l'événement.
 
  La méthode executerRequete($sql, array($idEvent)) est appelée pour exécuter la requête SQL en passant l'identifiant de l'événement en tant que paramètre.
  
   Si la requête renvoie des résultats, la première ligne de résultat est renvoyée sous forme de tableau associatif.
   
    Sinon, une exception est levée avec un message d'erreur approprié.

Les colonnes de la table "T_EVENT" sont renommées dans la requête SQL pour correspondre aux clés du tableau associatif retourné par les méthodes (id, date, titre, contenu).

