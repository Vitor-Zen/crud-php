<?php
session_start();
?>
<?php include('includes/header.php'); ?>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Adicionar Estudante
                            <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Telefone</label>
                                <input type="text" name="telefone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Curso</label>
                                <input type="text" name="curso" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php include('includes/footer.php'); ?>