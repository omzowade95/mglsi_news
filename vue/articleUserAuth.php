<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Affichage d'un article</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php require_once 'inc/enteteUserConnected.php'; ?>

	<div class="container site">
	    <?php 	require_once 'inc/menuUserConnected.php'; ?>
	    <main class="main">
            <?php if (!empty($article)): ?>
                <article class="card">
                    <header class="card-header card-header-avatar">
                        <img src="assets/img/avatar.png" alt="Avatar" width="45" height="45" class="card-avatar">
                        <div class="card-title"><?= $article->titre ?></div>
                        <div class="card-date">Publié le <?= $article->dateCreation ?></div>
                    </header>
                    <div class="card-body">
                        <p>
                            <img src="assets/img/image.jpeg" alt="Paysage" class="full-width">
                        </p>
                        <p><?= $article->contenu ?></p>
                    </div>
                    <footer class="card-footer">
                        <a class="card-like" href="#">120pouces</a>
                        <a class="card-comments" href="#">12 commentaires</a>
                    </footer>
                </div>
            <?php else: ?>
                <div class="message">L'article demandé n'existe pas</div>
            <?php endif ?>
	    </main>
	</div>

</body>
</html>