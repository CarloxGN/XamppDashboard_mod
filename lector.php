<div class="large-12 columns">
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
          $pos = strpos($archivo, '.');
          $largo = strlen($archivo);
          if ($pos == true && $largo >= 3){
              echo '<a target="_blank" href="../'.$archivo.'">'.$archivo.'</a><br />';
          }else{
              echo '<a target="_blank" href="../'.$archivo.'">['.$archivo.']</a><br />';
          }           
      }
  }
?>
</div>