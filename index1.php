	<?php
    include("con.php");
    // Dados do cadastro a ser inserido na tabela rota
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // Montando a query SQL para inserir o novo cadastro na tabela rota
    $sql = "INSERT INTO usuarios (nome, email, senha)
            VALUES ('$nome', '$email', '$senha')";
    
    // Executando a query SQL
    if (mysqli_query($conn, $sql)) {
      echo "Registro concluído com sucesso!";
    } else {
      echo "Erro no registro: 404" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    
    ?>

