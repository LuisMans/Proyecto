<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
  <title>Mascotas</title>
</head>
<body>
  <h1>Registro De Mascotas</h1>

  <fieldset>
    <legend>¿Cuántas mascotas registrara?</legend>
    <form method="POST" action="contacto" >
      @csrf
      <br>
      <input type="number" name="cantInputs" min="1" max="3" required>
      <input type="submit" name="" value="GENERAR">
    </form>
  </fieldset>
  <br>

  <form  action="G2" method="POST">
    @csrf
    <?php if(isset($_POST['cantInputs'])){ ?> 
      <?php 

      for ($i=1; $i<= $_POST['cantInputs'] ; $i++) {?>
        
        
        
        <input type="text" name="marcas[]"  id="Marca" placeholder="Marca" required><br>
        
        <input type="text" name="modelos[]" id="Modelo" placeholder="Modelo" required><br>

        <input type="text" name="anio[]"    id="Año" placeholder="Año" maxlength="4" required><br>

        <input type="text" name="estado[]"  id="Estado" placeholder="Estado" required><br>

        <input type="text" name="pais[]"    id="Pais" placeholder="Pais" required><br>

        <input type="text" name="placas[]"  id="Placas" placeholder="Placas" required><br>

        <input type="text" name="tipo[]"    id="Tipo" placeholder="Tipo" required><br><br>

      <?php } ?>
    <?php } ?>  
    <br>
    <input type="submit" value="Registrar" >
    <button onclick="location.href='registros.autos'">Continuar</button>  

  </form>
    
  
  
</body>
</html>