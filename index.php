<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>To-Do List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="my-4">Tareas pendientes:</h2>
        <ul id="taskList" class="list-group">
            <?php
            foreach ($tasks as $task) {
                echo "<li class='list-group-item'>$task <button class='btn btn-danger btn-sm float-right'>Eliminar</button></li>";
            }
            ?>
        </ul>

        <form onsubmit="return addTask()" class="form-inline my-4">
            <div class="form-group mx-sm-3 mb-2">
                <input type="text" id="newTask" class="form-control" placeholder="Nueva tarea" required>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Agregar tarea</button>
        </form>
    </div>

    <script>
        function addTask() {
            var newTask = document.getElementById('newTask').value;
            if (newTask.trim() === '') {
                alert('Por favor, ingresa una tarea.');
                return false;
            }

            var taskList = document.getElementById('taskList');
            var newTaskItem = document.createElement('li');
            newTaskItem.className = 'list-group-item';
            newTaskItem.innerHTML = newTask + " <button class='btn btn-danger btn-sm float-right'>Eliminar</button>";
            taskList.insertBefore(newTaskItem, taskList.childNodes[0]);

            document.getElementById('newTask').value = '';
            return false;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
