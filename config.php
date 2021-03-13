<!-- Arquivos responsavel por armazenar constantes e informações sobre o sistema -->
<?php
    
    session_start();

    //autoload de classes
    $autoload = function($class){
        include('classes/'.$class.'.php');
    };
    spl_autoload_register($autoload);


    // Constantes de acesso ao Banco de dados
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','gestao');


    define('MAIN','http://localhost/gestao_arquivos/');

?>




