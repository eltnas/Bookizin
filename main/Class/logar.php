<?php

    session_start();
    require_once 'Connection.php';

    Class Login {

        function _construct(){
            $objConnection = new Connection();
        }

        function verificaLogado(){
            if(!isset($_SESSION['logado'])){
                header("Location: dirname(__FILE__)/../main.php");
                exit();
            }
        }

        function Logar($usrName, $usrPassword){
            $q_usuario = mysqli_query("SELECT * FROM tbl_user WHERE tbl_user.login = '". $usrName . "'");

            if(mysqli_num_rows($q_usuario) == 1){
                $d_usuario = mysqli_fetch_array($q_usuario);
                if($d_usuario['senha'] == $usrPassword){
                    $_SESSION['user_id'] = $d_usuario['user_id'];
                    $_SESSION['logado'] = 'sim';
                    header("Location: ./main/main.php");
                } else{
                    $Erro = "Usuário ou senha incorretos! Verifique";
                    return $Erro;
                };
            }

            function getIdUsuario(){
                return $_SESSION['user_id'];
            }

            function logged_out(){
                session_destroy();
                header("Location: ./../../index.php");
            }

        }
    }