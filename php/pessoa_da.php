<?php

include_once("database.php");
function inseres_usuarios($nome, $email){
    $db= connecta_db();
    $sql= "INSERT INTO usuario(nome, email) VALUES (?, ?)";
    $stmt= $db->prepare($sql);
    $stmt->bindValue(0,$nome,PDO::PARAM_STR);
    $stmt->bindValue(1,$email, PDO::PARAM_STR);

    try{
        $stmt->execute();
        echo "Usuarios inserido com sucesso!";
    }catch (PDOException $e) {
        exho"Erro ao inserir usuario:". $e->getMassege();
    }
    $db = null

}


function recupera_lista_usuarios(){
    $bd=connecta_db();
    $sql = "SELECT * FROM usuario";
    $stmt = $bd->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchALL(PDO::FETCH_ASSOC);
    var_dump($resultado);
}
recuperar_lista_usuario();
?>