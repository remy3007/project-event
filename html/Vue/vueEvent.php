<?php 

$this->titre = "Event - " . $event['titre']; ?>

<article>
    <header>
        <h1 class="titreEvent"><?= $event['titre'] ?></h1>
        <time><?= $event['date'] ?></time>
    </header>
    <p><?= $event['contenu'] ?></p>
</article>
<hr />

<header>
    <h1 id="titreReponses">Réponses à <?= $event['titre'] ?></h1>
</header>
<?php foreach ($commentaires as $commentaire): ?>
    <p><?= $commentaire['date'] ?></p>
    <p><?= $commentaire['auteur'] ?> dit :</p>
    <p><?= $commentaire['contenu'] ?></p>
<?php endforeach; ?>
<hr />
<form method="post" action="index.php?action=commenter">
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value="<?= $event['id'] ?>" />
    <input type="submit" value="Commenter" />
</form>

