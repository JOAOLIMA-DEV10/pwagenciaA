<?php
include "conexao.php";
// VERIFICA SE FOI ENCIADO PELO METODO POST
if($_SERVER ["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = ($_POST['senha']);
    $tipo_perfil = ($_POST['tipo_perfil']);

    $verificaEmail = "select usuario_id from tbl_usuarios where email = :email";
    $_preparaConsulta = $cn->prepare($_verificaEmai);
    $_preparaConsulta -> bindValue(':email',$email,PDO:: PARAM_STR);
    $_preparaConsulta ->execute();

    if($_preparaConsulta->rowcount()>0){
        echo "<script>
        alert('o eamil informado ja esta cadastrado no  sistema! tente fazer o login.')
        <windown class="location h"></windown>
    })

?>
