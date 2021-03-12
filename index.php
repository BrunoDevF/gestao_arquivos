<?php

require_once('config.php');


if(Gestao::logado() == false){
   include('Gestao/login.php');
}else {
   include('Gestao/main.php');
}

?>