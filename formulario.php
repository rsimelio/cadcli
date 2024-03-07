<?php 
if(isset($_POST['submit']))
{
  include_once('config.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $sexo = $_POST['genero'];
  $data_nasc = $_POST['data_nascimento'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $endereco = $_POST['endereco'];

  $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Formulário</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method='POST'>
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                  <input type="text" name="nome" id="nome" class="inputUser" required>
                  <Label for="nome" class="labelInput">Nome Completo</Label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <Label for="email" class="labelInput">Email</Label>
                  </div>
                  <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <Label for="telefone" class="labelInput">Telefone</Label>
                </div><br>
                <p>Sexo:</p> 
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label><br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label><br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label><br>
                <br><br>
                    <Label for="data_nascimento"><b>Data de Nascimento</b></Label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <Label for="cidade" class="labelInput">Cidade</Label>
                  </div>
                  <br><br>
                  <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <Label for="estado" class="labelInput">Estado</Label>
                  </div>
                  <br><br>
                  <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <Label for="endereco" class="labelInput">Endereço</Label>
                  </div>
                  <br><br>
                  <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>