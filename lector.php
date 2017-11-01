<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
    <link href='https://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="large-12 columns" style="font-family: Michroma;">
  <?php
  $directorio = opendir("../"); //ruta actual
  while ($archivo = readdir($directorio)){
      /*
      Obtenemos un archivo y luego otro sucesivamente
      verificamos si es o no un directorio
      de ser un directorio lo envolvemos entre corchetes
      en este caso de ser necesario la omitimos
      */
      if(is_dir($archivo) === true){
            echo '<a target="_blank" href="../'.$archivo.'">['.$archivo.']</a><br />';
      }else{
        if(!is_file($archivo)){
          echo '<a target="_blank" href="../'.$archivo.'">['.$archivo.']</a><br />';
        }else{
          $pos = strpos($archivo, '.');
          $largo = strlen($archivo);
          if ($pos == true && $largo >= 3){
              echo '<a target="_blank" href="../'.$archivo.'">'.$archivo.'</a><br />';
          }else{
              echo '<a target="_blank" href="../'.$archivo.'">['.$archivo.']</a><br />';
          }
        }
      }
  }
?>
</div>
</body>
</html>