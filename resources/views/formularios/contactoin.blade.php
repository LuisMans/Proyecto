<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
  <title>Autos</title>
</head>
<body>
  <h1>Registro De Vehículos</h1>

  <fieldset>
    <legend>¿Cuántos vehiculos ingresara?</legend>
    <form method="POST" action="contacto" >
      @csrf
      <br>
      <input type="number" name="cantInputs" min="1" max="3" required>
      <input type="submit" name="" value="GENERAR">
    </form>
  </fieldset>
  <br>

  <form  action="G" method="POST">
    @csrf
    <?php if(isset($_POST['cantInputs'])){ ?> 
      <?php 

      for ($i=1; $i<= $_POST['cantInputs'] ; $i++) {?>
        
        
        
        <input type="text" name="marcas[]"  id="Marca"  placeholder="Marca"><br>
        <input type="text" name="modelos[]" id="Modelo" placeholder="Modelo"><br>
        <input type="text" name="anio[]"    id="Año"    placeholder="Año"><br>
        <input type="text" name="estado[]"  id="Estado"    placeholder="Estado"><br>
        <input type="text" name="pais[]"    id="Pais"    placeholder="Pais"><br>
        <input type="text" name="placas[]"  id="Placas"    placeholder="Placas"><br>
        <input type="text" name="tipo[]"    id="Tipo"    placeholder="Tipo"><br><br>

      <?php } ?>
    <?php } ?>  
    <br>
    <input type="submit" value="Registrar" >
    <input type="reset" value="Continuar" />  

  </form>
    
  
  
</body>
</html>