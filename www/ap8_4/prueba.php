<?php 
require_once "autoloader.php";
$modelo = new Modelo();
$modelo->init();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<table class="greenTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Vencimiento</th>
            <th>Creación</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="4">
                
            </td>
        </tr>
    </tfoot>
    <tbody>
        <?php 
        $tasks = $modelo->getAllTasks();
        foreach ($tasks as $task) {
            echo "<tr>
                    <td>$task->id</td>
                    <td>$task->titulo</td>
                    <td>$task->fecha_vencimiento</td>
                    <td>$task->fecha_creacion</td>
                  </tr>";
        }
        ?>
        <tr>
            <td colspan="4"><a href='nueva.php'>Añadir tarea</a></td>
            <td colspan="4"><a href='modifica.php'>Modificar tarea</a></td>
            <td colspan="4"><a href='borrar.php'>borrar tarea</a></td>
        </tr>
    </tbody>
</table>

</body>
</html>
