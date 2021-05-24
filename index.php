<html>
<body>
<center><h1><a href="/">Inteligencia Artificial UACM</a></h1></center>
<?php
    //Autor Francisco Manuel García Martínez
    //Actualiza el contenido del Area de Texto
    if (isset($_POST['program'])) { file_put_contents('experto.pl', $_POST['program']);  } 
    // Ejecuta Query 
    if (isset($_POST['query'])) {   $query = $_POST['query']; } 
    //Trae el resultado de la consulta
    $resultado = exec('swipl -s experto.pl -g "'.$query.'" -t halt.', $output, $returnValue);
?>

<h2>Hacer consulta</h2>
<form method="post">
?- <input type="text" style="width: 75%;" name="query"><br>  
  <!-- Recibe la consulta desde teclado -->
<left><input type="submit" value="Consultar"><br></left>
<small>Ejemplo:<br>
¿Quien es el padre de Bart? <strong>padre(X, bart), write(X).</strong><br>
¿Quien es el abuelo de Bart? <strong>abuelo(X, bart), write(X).</strong></small>
</form>

<h2>Resultado de la consulta: <?= $query ?></h2>
<div style="border: 1px dashed black; width: 90%; padding-left: 12px; padding-right: 12px;">
    <p>Respuesta: 
    <?php
    	if($returnValue == 0) echo 'true';
    	elseif($returnValue == 1) echo 'false';
    	elseif($returnValue == 2) echo 'error';
    ?>  <br> <?= $resultado ?></p>  <!--escribe el nombre del Padre-->
</div>

<h2>Programa en Prolog</h2>
<form method="post">
<textarea style="min-height: 200px; width: 100%;" name="program"><?= file_get_contents('experto.pl'); ?></textarea>  <!--trae el programa prolog-->
<input type="submit" value="Actualizar">
</form>

</body>
</html>
