<?php
    Class Connection {
        var $host = 'localhost';
        var $user = 'bookizin';
        var $usrPass = '';
        var $db = 'bookizin';


        function _construct(){
            $this->Conectar();
        }

        function Conectar(){
            if(!($conectar = mysqli_connect($this->host, $this->user, $this->usrPass))){
                echo "Erro ao conectar com o Servidor, verifique!";
            } else {
                if(!($con = mysqli_select_db($this->db, $conectar))){
                    echo "Erro ao conectar com o banco de dados, verifique!";
                }
            }
        }

    }