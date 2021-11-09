<?php
	require_once 'modele/Article.php';
	require_once 'modele/Categorie.php';
	require_once 'modele/ConnexionManager.php';
	require_once 'modele/Users.php';

	class Controller
	{

		function __construct()
		{

		}

		public function showAccueil()
		{
			$articles = Article::getList();
			$categories = Categorie::getList();

			require_once 'vue/accueil.php';

		}

		public function showArticle($id)
        {
            $article = Article::getById($id);
            $categories = Categorie::getList();

            require_once 'vue/article.php';
        }

        public function showCategorie($id)
        {
            $articles = Article::getByCategoryId($id);
            $categories = Categorie::getList();

            require_once 'vue/articleByCategorie.php';
        }

		public function showAccueilUserAuth($role) {
		    $articles = Article::getList();
            $categories = Categorie::getList();

            if($role == 'admin'){
                require_once 'vue/adminConnected.php';
            }
            else if ($role == 'user'){
                require_once 'vue/userConnected.php';
		    }
		}

		public function showArticleUserAuth($id)
		{
			$article = Article::getById($id);
			$categories = Categorie::getList();

			require_once 'vue/articleUserAuth.php';
		}

		public function showCategorieUserAuth($id)
		{
			$articles = Article::getByCategoryId($id);
			$categories = Categorie::getList();

			require_once 'vue/articleByCategorieUserAuth.php';
		}

		 function login($username,$password){
            if($this->authenticate($username, $password) == 'user') {

                $user = new Users($username);

                $_SESSION['user'] = $user;

                return 'user' ;
            }
            else if ($this->authenticate($username, $password) == 'admin'){
                $user = new Users($username);

                $_SESSION['user'] = $user;

                return 'admin' ;
            }
            else {
                return false ;
            }
        }

        static function authenticate($su , $p){

            $authentic = Users::getUsers($su,$p) ;

            return $authentic;
        }

        function logout (){
            session_start();
            session_destroy();
        }
	}
?>