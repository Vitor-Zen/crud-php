<?php
session_start();
require 'dbcon.php';

if(isset($_POST['deleta_estudante']))
{
    $aluno_id = mysqli_real_escape_string($con, $_POST['deleta_estudante']);

    $query = "DELETE FROM aluno WHERE id='$aluno_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Aluno deletado com sucesso!";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Erro ao deletar o aluno";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['editar']))
{
    $aluno_id = mysqli_real_escape_string($con, $_POST['aluno_id']);

    $name = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $telefone = mysqli_real_escape_string($con, $_POST['telefone']);
    $curso = mysqli_real_escape_string($con, $_POST['curso']);

    $query = "UPDATE aluno SET nome='$name', email='$email', telefone='$telefone', curso='$curso' 
                WHERE id='$aluno_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Editado com sucesso!";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Erro";
        header("Location: index.php");
        exit(0);
    }
}

// isset — Informa se a variável foi iniciada
if(isset($_POST['salvar']))
{
    // Captura os dados do formulario pelo name
    $name = mysqli_real_escape_string($con, $_POST['nome']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $telefone = mysqli_real_escape_string($con, $_POST['telefone']);
    $curso = mysqli_real_escape_string($con, $_POST['curso']);
        
    // Gera o comando sql de inserção com os dados capturados do formulário 
    $query = "INSERT INTO aluno (nome, email, telefone,	curso) VALUES 
    ('$name', '$email', '$telefone', '$curso')";

    // Exibe mensagem
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Criado com sucesso!";
        header("Location: student_create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não criado sucesso";
        header("Location: student_create.php");
        exit(0);
    }
}
?>