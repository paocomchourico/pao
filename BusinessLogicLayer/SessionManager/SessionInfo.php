<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionInfo
 *
 * @author Fabio Batalha
 */
class SessionInfo {
    
    //Variaveis
    public $sessionID;
    public $username;
    public $email;
    public $name;
    
    
    function __construct($_sessionID, $_username, $_email, $name) {
        $this->sessionID = $_sessionID;
        $this->username = $_username;
        $this->$email = $_email;
        $this->$name = $name;
        //Colocar a informação do utilizador na Sessão
        $_SESSION['USER_INFO'] = $this;
   }
}
