<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Kendo UI Snippet</title>
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/themes/6.3.0/default/default-ocean-blue.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2023.1.425/js/kendo.all.min.js"></script>
</head>
<body>
<?php

require_once ("c://xampp//htdocs/proyecto/config/db.php");
require_once ("c://xampp//htdocs/proyecto/lib/DataSourceResult.php");
require_once ("c://xampp//htdocs/proyecto/lib/Kendo/Autoload.php");

//Conexion con php y kendo grid

$db = new PDO('mysql:host=localhost;dbname=prueba;charset=utf8', 'root', '');

$statement = $db->prepare('SELECT * FROM username');
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

$model = new \Kendo\Data\DataSourceSchemaModel();

$nombreField = new \Kendo\Data\DataSourceSchemaModelField('nombre');
$nombreField->type('string');

$apellidoField = new \Kendo\Data\DataSourceSchemaModelField('apellido');
$apellidoField->type('string');

$model->addField($nombreField, $apellidoField);

$schema = new \Kendo\Data\DataSourceSchema();

$schema->model($model);

$dataSource = new \Kendo\Data\DataSource();

 $dataSource->data($users)
 ->schema($schema);
           
$grid = new \Kendo\UI\Grid('grid');

$nombreColumn = new \Kendo\UI\GridColumn();
$nombreColumn->field('nombre')
               ->title('nombre');

$apellidoColumn = new \Kendo\UI\GridColumn();
$apellidoColumn->field('apellido')
                ->title('apellido');

$grid->addColumn($nombreColumn, $apellidoColumn)
    ->dataSource($dataSource);

    echo $grid->render();
?>

</body>
</html>