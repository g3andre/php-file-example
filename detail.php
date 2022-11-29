<?php
$id = $_GET['id'];
$fileContent = file_get_contents('cadastrados.csv');
$cadastrados = explode("\n", $fileContent);
$data = explode(',', $cadastrados[$id]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Detalhes do Usuário</title>
</head>

<body>
  <div class="container">
    <h2 class="my-4">Detalhes do Usuário</h2>

    <div class="card text-white bg-primary w-50">
      <img class="card-img-top" src=<?php echo "'" . $data[3] . "'"; ?> alt="Title" >
      <div class="card-body">
        <h4 class="card-title">Nome: <?php echo $data[0]; ?></h4>
        <p class="card-text">Email: <?php echo $data[1]; ?> </p>
        <p class="card-text">Endereço: <?php echo $data[2]; ?> </p>
      </div>
    </div>
</body>

</html>