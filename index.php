
<form method="post">
  Name: <input type="text" name="text" /> 
  <input type="submit" name="submit" value="enviar texto" />
  <input type="submit" name="reinicio" value="reiniciar">
  <input type="submit" name="mostrar" value="mostrar">

</form>
<?php
if(isset($_POST['text'])) {
  $name = $_POST['text'];
  $handle = fopen('names.txt', 'a');
  fwrite($handle, "\n".$name);
   
}
if(isset($_POST["reinicio"]))
{
  $handle = fopen("names.txt","w");
  unlink("names.txt");
  echo"reiniciado correctamente";
}
if(isset($_POST["mostrar"]))
{
  $handle = fopen("names.txt","r");


  $leer = file("names.txt", FILE_SKIP_EMPTY_LINES);
  foreach($leer as $key => $value)
  {
    echo $value, "<br />";
  }

}
?>