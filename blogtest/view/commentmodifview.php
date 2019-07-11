<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
<h1>Mon super blog !</h1>
<p><a href="index.php?action=post&amp;id=<?=$data['id'] ?>">Retour à la liste des commentaires</a></p>

<form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
<div>
        <label for="comment">Commentaire</label><br />
        <textarea id="comment" name="comment"></textarea>
    </div>
<div>
        <input type="submit" />
    </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>