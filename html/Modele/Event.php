<?php

require_once __DIR__.'/Modele.php';

class Event extends Modele {

    /** Renvoie la liste des events du blog
     * 
     * @return PDOStatement La liste des events
     */
    public function getEvents() {
        $sql = 'select EVENT_ID as id,EVENT_DATE as date,'
                . ' EVENT_TITRE as titre, EVENT_CONTENU as contenu from T_EVENT';
        $events = $this->executerRequete($sql);
        return $events;
    }

    /** Renvoie les informations sur un event
     * 
     * @param int $id L'identifiant du event
     * @return array L event
     * @throws Exception Si l'identifiant de l'event est inconnu
     */
    public function getEvent($idEvent) {
        $sql = 'select EVENT_ID as id,EVENT_DATE as date,'
                . ' EVENT_TITRE as titre, EVENT_CONTENU as contenu from T_EVENT'
                . ' where EVENT_ID=?';
        $event = $this->executerRequete($sql, array($idEvent));
        if ($event->rowCount() > 0)
            return $event->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun event ne correspond à l'identifiant '$idEvent'");
    }

}