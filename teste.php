<?php

$photo = $_FILES['photo'];  


if(strpos($photo['type'], 'image') === false && strpos($photo['type'], 'jpg' === false) && strpos($photo['type'], 'png') ){
  echo "<p>Não é uma imagem</p>";
  return;
}


var_dump($photo['type']);

$name = filter_var($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$address = filter_var($_POST['address']);

$row = $name . ',' . $email . ',' . $address . ',' . salvarFoto($photo) ."\n";
file_put_contents('./cadastrados.csv', $row, FILE_APPEND);

header('Location:/index.php');

function salvarFoto($file) {
  $filePath = './images';
  $fileName = uniqid('img');
  $fileExtension = explode('.', $file['name']);
  $fileFullPath = $filePath . '/' . $fileName . '.' . $fileExtension[count($fileExtension) - 1];
  copy($file['tmp_name'],$fileFullPath);

  return $fileFullPath;
}