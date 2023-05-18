<?php
require 'dbcon.php';
?>
<?php include('includes/header.php'); ?>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Detalhes do Estudante
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

                                        <div class="mb-3">
                                            <label>Nome</label>
                                            <p class="form-control">
                                                <?= $aluno['nome'];?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label>Email</label>
                                            <p class="form-control">
                                                <?= $aluno['email'];?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label>Telefone</label>
                                            <p class="form-control">
                                                <?= $aluno['telefone'];?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label>Curso</label>
                                            <p class="form-control">
                                                <?= $aluno['curso'];?>
                                            </p>
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