<?php

require_once __DIR__.'/../Modele/Event.php';
require_once __DIR__.'/../Modele/Commentaire.php';
require_once __DIR__.'/../Vue/Vue.php';

class ControleurEvent {

    private Event $event;
    private Commentaire $commentaire;

    public function __construct() {
        $this->event = new Event();
        $this->commentaire = new Commentaire();
    }

    // Affiche les détails sur un event
    public function event($idEvent) {
        $event = $this->event->getEvent($idEvent);
        $commentaires = $this->commentaire->getCommentaires($idEvent);
        $vue = new Vue("Event");
        $vue->generer(['event' => $event, 'commentaires' => $commentaires]);
    }

    // Ajoute un commentaire à un event
    public function commenter($auteur, $contenu, $idEvent) {
        // Sauvegarde du commentaire
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $idEvent);
        // Actualisation de l'affichage 
        $this->event($idEvent);
    }

}


