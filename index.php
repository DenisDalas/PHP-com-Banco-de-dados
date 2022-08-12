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
</nav> <br>

<div class="container">
    <?php 
 if(isset($_GET['msg'])){
    $msg = $_GET['msg'];
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
'.$msg.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
 }
    ?>

    <a href="add_new.php" class="btn btn-dark mb-3">Cadastrar Usuário</a> 
    <br>
    <table class="table table-success table-striped">
    <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Senha</th>
      <th scope="col">Aniversário</th>
      <th scope="col">Foto</th>
      <th scope="col">Biografia</th>
      <th scope="col">Tipo</th>
      <th scope="col">Status</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include "db_conn.php";

   $sql = "SELECT * FROM `users`";
   $resultado = mysqli_query($conn, $sql);
   while ($row = mysqli_fetch_assoc($resultado)){
    ?>

<tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['user_name'] ?></td>
      <td><?php echo $row['user_email'] ?></td>
      <td><?php echo $row['user_password'] ?></td>
      <td><?php echo $row['user_birth'] ?></td>
      <td><?php echo $row['user_avatar'] ?></td>
      <td><?php echo $row['user_bio'] ?></td>
      <td><?php echo $row['user_type'] ?></td>
      <td><?php echo $row['user_status'] ?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id']?>"class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>

        <a href="delete.php?id=<?php echo $row['id']?>"class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
      </td>
    </tr>
    <?php

   }
  ?>

    
  </tbody></table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    
</body>
</html>