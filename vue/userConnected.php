<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Actualités MGLSI</title>
        <link rel="stylesheet" type="text/css" href="/mglsi_news_simple/assets/css/style.css">
    </head>
    <body>
        <?php
            require_once 'inc/enteteUserConnected.php';
        ?>

        <div class="container site">
            <?php
                require_once 'inc/menuUserConnected.php';
            ?>
            <main class="main">
                   <?php if (!empty($articles)): ?>
                       <?php foreach ($articles as $article): ?>
                           <article class="card">
                               <header class="card-header card-header-avatar">
                                   <img src="/mglsi_news_simple/assets/img/avatar.png" alt="Avatar" width="45" height="45" class="card-avatar">
                                   <div class="card-title"><a href="conn.php?action=article&id=<?= $article->id ?>"><?= $article->titre ?></a></div>
                               </header>
                               <div class="card-body">
                                   <p>
                                       <img src="/mglsi_news_simple/assets/img/image.jpeg" alt="Paysage" class="full-width">
                                   </p>

                                   <p><?= substr($article->contenu, 0, 150) . '...' ?></p>
                               </div>
                                <footer class="card-footer">
                                     <a class="card-like" href="#">120pouces</a>
                                     <a class="card-comments" href="#">12 commentaires</a>
                                </footer>
                           </article>
                       <?php endforeach ?>
                   <?php else: ?>
                       <div class="message">Aucun article trouvé</div>
                   <?php endif ?>
            </main>
        </div>

    </body>
</html>