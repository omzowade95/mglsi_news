<?php
class Database extends PDO{
    private $dbhost = 'localhost';
    private $dbname = 'mglsi_news';
    private $dbport = '';
    private $dbuser = 'root';
    private $dbpwd = '';

    public function __construct($dbhost,$dbport, $dbname, $dbuser, $dbpwd){
        
            $this->dbhost = $dbhost;
            $this->dbport = $dbport;
            $this->dbname = $dbname;
            $this->dbuser = $dbuser;
            $this->dbpwd = $dbpwd;

    }

    public function connect()
    {
        try {
            $bdd = parent::__construct('mysql:host='.$this->dbhost.'; port=' .$this->dbport.';dbname='. $this->dbname , $this->dbuser , $this->dbpwd);
            return $bdd;
        } catch (PDOException $e) {
            echo("\t" . $e->getMessage() . "\n");
        }
    }
  }