<nav class="sidebar">
		<a href="/mglsi_news_simple/conn.php">Fil d'actualité</a>
		<?php foreach ($categories as $categorie): ?>
			<a href="conn.php?action=categorie&id=<?= $categorie->id ?>"><?= $categorie->libelle ?></a>
		<?php endforeach ?>
</nav>