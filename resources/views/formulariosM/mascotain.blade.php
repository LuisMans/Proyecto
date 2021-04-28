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
    <form method="POST" action="mascota" >
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
        
        
        
        <input type="text" name="tipos[]"  id="Tipo" placeholder="Tipo De Mascota" required><br>
        
        <input type="text" name="nombres[]" id="Nombre" placeholder="Nombre De Mascota" required><br>

        <input type="text" name="pedigrees[]" id="Pedi" placeholder="Pedigree" required><br>

        <input type="text" name="chips[]"  id="Chip" placeholder="Número De Chip" required><br>

        <input type="text" name="cartillas[]" id="Cartilla" placeholder="Cartilla De Vacunación" required><br>


      <?php } ?>
    <?php } ?>  
    <br>
    <input type="submit" value="Registrar" >
     

  </form>
    
  
  
</body>
</html>    