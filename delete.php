<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `users` WHERE id = $id";
$resultado = mysqli_query($conn, $sql);
if($resultado){
    header("Location: index.php?msg=Usuário excluido com sucesso.");
}
else{
    echo "Failed: " . mysqli_error($conn);
}
?>