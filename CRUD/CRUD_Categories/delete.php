<?php
     $id = $_GET['del'];
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8', 'root', '');
        }
        catch (Exception $e)
        {
            echo "Erreur de connexion à la base de données : ".$e->getMessage();
            $bdd = null;
        }
        $data = "DELETE FROM categorie WHERE id = $id ";
        $articles = $bdd->prepare($data);
        $articles->execute();

        header("Location:/mglsi_news_simple/vue/gestionCategories.php");
?>