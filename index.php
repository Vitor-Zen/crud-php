<?php
  session_start();
  require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>

  <div class="container mt-5">

    <?php  include('message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>
              Estudantes <a href="student_create.php" class="btn btn-primary float-end">Adicionar</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Telefone</th>
                  <th>Curso </th>
                  <th>Ação</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  $query = "SELECT * FROM aluno";
                  $query_run = mysqli_query($con, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach($query_run as $aluno)
                    {
                      ?>
                      <tr>
                        <td><?= $aluno['id']; ?></td>
                        <td><?= $aluno['nome']; ?></td>
                        <td><?= $aluno['email']; ?></td>
                        <td><?= $aluno['telefone']; ?></td>
                        <td><?= $aluno['curso']; ?></td>
                        <td>
                          <a href="student_view.php?id=<?= $aluno['id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                          <a href="student_edit.php?id=<?= $aluno['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                          <form action="code.php" method="POST" class="d-inline">
                              <button type="submit" name="deleta_estudante" value="<?= $aluno['id']; ?>" class="btn btn-danger btn-sm">Deletar</button>
                          </form>
                        </td>
                      </tr>
                      <?php
                    }
                  }
                  else
                  {
                    echo "<h5> Não encontrado </h5>";
                  }
                ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>  
  
<?php include('includes/footer.php'); ?>
