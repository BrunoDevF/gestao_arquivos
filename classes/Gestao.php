<?php
class Gestao
{
  
    
    public static function logado(){
        return isset($_SESSION['login']) ? true : false;
    }
    public static function redirect($page){
        header('Location: '.$page);
        die();
    }
    public static function destroy(){
        session_destroy();
        header('Location:'.MAIN);
    }
}
?>