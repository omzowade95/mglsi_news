<?php
	require_once 'controleur/Controller.php';

    @$submit = $_REQUEST['submit'];
	$controller = new Controller();


	switch($submit){
        case 'login':
            $username = $_POST['username'];
            $password = $_POST['pass'];


           if($controller->login($username,$password) == 'user'){
                $role = 'user';
                $controller->showAccueilUserAuth($role);
           }
           else if ($controller->login($username,$password) == 'admin'){
                $role = 'admin';
                $controller->showAccueilUserAuth($role);
           }
           else{
                header("Location:vue/login.php");
            }

        break;
    }

    if (!isset($_GET['action'])){
        $role = $_GET['role'] ;
        if($role == 'admin'){
            $controller->showAccueilUserAuth('admin');
        }
        else{
            $controller->showAccueilUserAuth('user');
        }
    }
    else {
        if (strtolower($_GET['action']) === 'article')
        {
            if (isset($_GET['id']))
            {
                $controller->showArticleUserAuth($_GET['id']);
            }
            else
            {
                $controller->ShowErrorPage();
            }
        }
        else if (strtolower($_GET['action']) === 'categorie')
        {
            if (isset($_GET['id']))
            {
                $controller->showCategorieUserAuth($_GET['id']);
            }
            else
            {
                $controller->ShowErrorPage();
            }
        }
        else
        {
            $controller->showAccueilUserAuth($_GET['role']);
        }
    }