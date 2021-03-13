<h2>Pagina principal</h2>
<?php
    if(isset($_POST['acao'])){
        Gestao::destroy();
    }
?>
<form action="" method="post">
    <input type="submit" value="destroy" name="acao">
</form>

