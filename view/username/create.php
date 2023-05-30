<?php
require_once("C://xampp/htdocs/proyecto/view/head/head.php");
?>
<form action="store.php" method="POST" autocomplete="off"> 
  <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
    <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input type="text" name="apellido" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
  <a class="btn btn-danger" href="index.php">cancelar</a>

</form>
<?php
require_once("C://xampp/htdocs/proyecto/view/head/footer.php");
?>