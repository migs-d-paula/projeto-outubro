<?php
// Variáveis POST do Formulário
$nome = $_POST['campo-nome'];
$sobrenome = $_POST['campo-sobrenome'];
$idade = $_POST['campo-idade'];
$email = $_POST['campo-email'];
$telefone = $_FILES['campo-telefone'];

// Credenciais da Base de Dados:
$servidor = 'localhost';
$base = 'projeto_outubro';
$usuario = 'root';
$senha = '';

//upload
if (move_uploaded_file($ator_imagem['tmp_name'], $ator_diretorio.$ator_imagem['name']))
{
    echo 'imagem enviada com sucesso!';
}
else
{
    echo 'imagem nao enviada';
}

// Criar a CONEXÃO com a Base de Dados:
$conexao = new mysqli ($servidor, $usuario, $senha, $base);

// Criar e Excecutar a SQL para INSERIR os dados da tabela:
$sql = 'INSERT INTO tbl_outubro(nome, sobrenome, idade, email, telefone VALUES ("' . $nome . '", "' . $sobrenome . '", "' . $idade . '", "' . $email . '", "' . $telefone . '");';
$conexao->query($sql);

// Encerrar CONEXÃO com a Base de Dados:
$conexao->close();

// Direcionar o usuário de volta a página inicial:
header('Location: ');
?>