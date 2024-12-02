<?php
function connecta_db(){
    $user="root";
    $pass="aluno";
    $database="crud";
    $host="localhost";
   
    $db=new PDO("mysql:host=$host;dbname=$database", $user, $pass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($db) {
        return $db;

    }else{
        return false;
    }
}

function check_conn($conn_id){
    if($conn_id){
        echo"Conexao estabelecida com sucesso";

    }else{
        echo"Erro ao conectar com o banco de dados!";
    }
}

var_dump(connecta_db());

check_conn(connecta_db());


?>