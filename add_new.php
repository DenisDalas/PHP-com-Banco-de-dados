<?php
include "db_conn.php";
if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_birth = $_POST['user_birth'];
    $user_avatar = $_POST['user_avatar'];
    $user_bio = $_POST['user_bio'];
    $user_type = $_POST['user_type'];
    $user_status = $_POST['user_status'];

    $sql = "INSERT INTO `users`(`id`, `user_name`, `user_email`, `user_password`, `user_birth`, `user_avatar`, `user_bio`, `user_type`, `user_status`) VALUES (NULL,'$user_name','$user_email','$user_password','$user_birth','$user_avatar','$user_bio','$user_type','$user_status')";

    $resultado = mysqli_query($conn, $sql);

    if($resultado){
        header("Location: index.php?msg=Usuário cadastrado.");
    }
    else {
        echo "Falied: " . mysqli_error($conn);
    }
}
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Aplication</title>

</head>
<body>

<nav class="navbar navbar-light justify-content-center fs_3 mb_5" style="background-color: #00ff5573;">
PHP Complete CRUD Aplication
</nav>

<div class="container">
    <div class="text-center mb-4">
        <h3>Cadastrar usuário</h3>
        <p class="text-muted">Cadastre-se aqui.</p>
    </div>

    <div class="container d-flex justify_content-center">
        <form action="" method="POST" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nome:</label>
                <input type="text" class="form-control" name="user_name" placeholder="Digite seu nome.">
            </div>

            <div class="col">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" name="user_email" placeholder="Digite seu E-mail.">
            </div>          
        </div>

        <div class="mb-3">
        <label class="form-label">Senha:</label>
         <input type="password" class="form-control" name="user_password" placeholder="Digite a senha">
        </div>

        <div>
        <label class="form-label">Aniversário:</label>
         <input type="date" class="form-control" name="user_birth" placeholder="Digite sua data de aniversário.">
        </div>

        <div>
        <label class="form-label">Foto:</label>
         <input type="text" class="form-control" name="user_avatar" placeholder="Adicione sua foto.">
        </div>

        <div>
        <label class="form-label">Biografia:</label>
         <input type="text" class="form-control" name="user_bio" placeholder="Adicione sua Biografia.">
        </div>

        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Atividade:</label>
                <input type="text" class="form-control" name="user_type" placeholder="Digite sua atividade.">
            </div> <br>

            <div class="col">
                <label class="form-label">Status:</label>
                <input type="text" class="form-control" name="user_status" placeholder="Digite seu status.">
            </div>
            </div>

            <div> <button type="submit" class="btn btn-success" name="submit">Salvar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
        </div>

    </form>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
</body>
</html>