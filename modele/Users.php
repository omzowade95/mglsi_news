<?php

    class Users {
        private $username;
        private $pass;

        function UserModel($username){
            $this->username = $username;
        }

        function get_username(){
            return $this->username;
        }

        public static function getUsers($su , $p)
        {

            $bdd = ConnexionManager::getInstance();
            $sql = "SELECT * FROM users WHERE email = '$su' AND password = '$p'";
            $result = $bdd->prepare($sql);
            $result->execute();

            foreach($result as $resuls)

            if($result->rowCount() > 0 && $resuls[4] == 2){
                return 'user' ;
            }
            else if($result->rowCount() > 0 && $resuls[4] == 1){
                return 'admin';
            }
            else {
                return false;
            }

        }
    }





