<?php

require_once __DIR__.'/../Modele/Event.php';
require_once __DIR__.'/../Vue/Vue.php';

class ControleurAccueil {

    private $event;

    public function __construct() {
        $this->event = new Event();
    }

// Affiche la liste de tous les events du blog
    public function accueil() {
        $events = $this->event->getEvents();
        $vue = new Vue("Accueil");
        $vue->generer(array('events' => $events));
    }

}

