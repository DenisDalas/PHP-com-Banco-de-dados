<?php
include "db_conn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_birth = $_POST['user_birth'];
    $user_avatar = $_POST['user_avatar'];
    $user_bio = $_POST['user_bio'];
    $user_type = $_POST['user_type'];
    $user_status = $_POST['user_status'];

    $sql = "UPDATE `users` SET `user_name`='$user_name',`user_email`='$user_email',`user_password`='$user_password',`user_birth`='$user_birth',`user_avatar`='$user_avatar',`user_bio`='$user_bio',`user_type`='$user_type',`user_status`='$user_status' WHERE id=$id";

    $resultado = mysqli_query($conn, $sql);

    if($resultado){
        header("Location: index.php?msg=Usuário editado com sucesso.");
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
        <h3>Editar usuário</h3>
        <p class="text-muted">Edite seu usuário aqui.</p>
    </div>

    <?php
 $sql = "SELECT * FROM `users` WHERE id = $id LIMIT 1";
 $resultado = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($resultado);
    ?>

    <div class="container d-flex justify_content-center">
        <form action="" method="POST" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Nome:</label>
                <input type="text" class="form-control" name="user_name" value="<?php echo $row['user_name'] ?>">
            </div>

            <div class="col">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" name="user_email" value="<?php echo $row['user_email'] ?>">
            </div>          
        </div>

        <div class="mb-3">
        <label class="form-label">Senha:</label>
         <input type="password" class="form-control" name="user_password" value="<?php echo $row['user_password'] ?>">
        </div>

        <div>
        <label class="form-label">Aniversário:</label>
         <input type="date" class="form-control" name="user_birth" value="<?php echo $row['user_birth'] ?>">
        </div>

        <div>
        <label class="form-label">Foto:</label>
         <input type="text" class="form-control" name="user_avatar" value="<?php echo $row['user_avatar'] ?>">
        </div>

        <div>
        <label class="form-label">Biografia:</label>
         <input type="text" class="form-control" name="user_bio" value="<?php echo $row['user_bio'] ?>">
        </div>

        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Atividade:</label>
                <input type="text" class="form-control" name="user_type" value="<?php echo $row['user_type'] ?>">
            </div> <br>

            <div class="col">
                <label class="form-label">Status:</label>
                <input type="text" class="form-control" name="user_status" value="<?php echo $row['user_status'] ?>">
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