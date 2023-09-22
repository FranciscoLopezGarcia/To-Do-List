<!-- CREACION DE TO-DO LIST -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
</head>
<body>

<form method="post">
    <input type="text" name="task" placeholder="Nueva tarea" required>
    <button type="submit">Agregar tarea</button>
</form>

<?php
$tasks = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newTask = $_POST['task'];
    if (!empty($newTask)) {
        $tasks[] = $newTask;
    }
}
?>

<h2>Tareas pendientes:</h2>
<ul>
    <?php
    foreach ($tasks as $task) {
        echo "<li>$task</li>";
    }
    ?>
</ul>

</body>
</html>
