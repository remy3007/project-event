<?php

require_once __DIR__.'/Modele.php';

class Commentaire extends Modele {


    public function getCommentaires($idEvent) {
        $sql = 'select COM_ID as id, COM_DATE as date,'
                . ' COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE'
                . ' where EVENT_ID=?';
        $commentaires = $this->executerRequete($sql, array($idEvent));
        return $commentaires;
    }

    // Ajoute un commentaire dans la base
    public function ajouterCommentaire($auteur, $contenu, $idEvent) {
        $sql = 'insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, EVENT_ID)'
            . ' values(?, ?, ?, ?)';
            $date = date('d-m-y h:i:s');
        $this->executerRequete($sql, array($date, $auteur, $contenu, $idEvent));
    }
}