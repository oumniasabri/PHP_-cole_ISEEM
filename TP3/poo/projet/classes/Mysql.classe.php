<?php
class Mysql {
    private $_serveur = "localhost";
    private $_login;
    private $_mdp;
    private $_bdd;
    private $_cnx;

    public function setServeur($serveur) {
      $this->_serveur = $serveur;
    }

    public function setLogin($login) {
      $this->_login = $login;
    }

    public function setMDP($mdp){
      $this->_mdp = $mdp;
    }

    public function setDB($db) {
      $this->_bdd = $db;
    }

    public function getCNX() {
      return $this->_cnx;
    }

    public function connexion() {
      $this->_cnx = new mysqli($this->_serveur, $this->_login, $this->_mdp, $this->_bdd);

      if (!$this->_cnx) 
        die("Erreur de connexion à la base de données : " . mysqli_connect_error());

      if (!mysqli_select_db($this->_cnx, $this->_bdd)) 
        die("Erreur : base de données inexistante : " . mysqli_error($this->_cnx));
    
    }

    public function requete($req) {
      $res = $this->_cnx->query($req);

      if (!$res)
        exit("<pre>Erreur dans la requête [$req] : " . $this->_cnx->error . "</pre>");

      return $res;
    }

}