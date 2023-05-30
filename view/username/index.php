<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $rows = $obj->index();
?>
<div class="mb-3">
    <a href="/proyecto/view/username/create.php" class="btn btn-primary">Agregar nuevo usuario</a>
</div>

<?php
require_once("c://xampp/htdocs/proyecto/grid.php");

?>


<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>