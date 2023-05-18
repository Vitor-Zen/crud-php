<?php
session_start();
require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Editar Estudante
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                            if(isset($_GET['id']))
                            {
                                $aluno_id = mysqli_real_escape_string($con, $_GET['id']);
                                $query = "SELECT * FROM aluno WHERE id='$aluno_id' ";

                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    $aluno = mysqli_fetch_array($query_run);
                                    ?>

                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="aluno_id" value="<?= $aluno['id']; ?>">

                                        <div class="mb-3">
                                            <label>Nome</label>
                                            <input type="text" name="nome" value="<?= $aluno['nome'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Email</label>
                                            <input type="email" name="email" value="<?= $aluno['email'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Telefone</label>
                                            <input type="text" name="telefone" value="<?= $aluno['telefone'];?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label>Curso</label>
                                            <input type="text" name="curso" value="<?= $aluno['curso'];?>" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <button type="submit" name="editar" class="btn btn-primary">Salvar</button>
                                        </div>

                                    </form>
                                                                            
                                    <?php
                                }
                                else
                                {
                                    echo "<h4> Id não encontrado </h4>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include('includes/footer.php'); ?>