<?php
$arquivo = file_get_contents('./cadastrados.csv');
$cadastrados = explode("\n", $arquivo);
$rowTables = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>PHP com arquivos</title>
</head>

<body>
  <div class="container">
    <h2 class="my-4">Formulario de Cadastro</h2>

    <form class="d-flex" method="POST" action="teste.php" enctype="multipart/form-data">
      <div class="col">
        <div class="mb-3">
          <label for="" class="form-label">Nome</label>
          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Endereço</label>
          <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Foto</label>
          <input type="file" name="photo" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
      </div>
    </form>

    <div class="table-responsive mt-5">
      <table class="table table-striped
      table-hover	
      table-borderless
      table-primary
      align-middle">
        <thead class="table-light">
          <caption>Usuarios cadastrados</caption>
          <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php
          foreach ($cadastrados as $index => $row) :
            $cels = explode(',', $row);
            if (count($cels) < 2) {
              break;
            }
          ?>
            <tr class="table-primary">
              <td scope="row"> <?php echo $index ?> </td>
              <td>
                <a href=<?php echo '"/detail.php?id=' . $index . '"' ?>>
                  <?php echo $cels[0]; ?>
                </a>
              </td>
              <td><?php echo $cels[1]; ?></td>
              <td><?php echo $cels[2]; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>

        </tfoot>
      </table>
    </div>
  </div>
</body>

</html>