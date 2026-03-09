<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ToDo App - VSCode Theme</title>
<link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container">
    <h1>🖥️ ToDo App</h1>

    <form action="/create" method="POST" class="task-form">
        <input type="text" name="title" placeholder="Task title" required>
        <input type="text" name="description" placeholder="Description">
        <button type="submit">Add Task</button>
    </form>

    <div class="filters">
        <a href="/">All</a>
        <a href="/filter/active">Active</a>
        <a href="/filter/completed">Completed</a>
    </div>

    <ul class="task-list">
        <?php foreach($tasks as $task): ?>
        <li class="<?= $task['status'] ? 'completed' : 'active' ?>">
            <div class="task-info">
                <strong><?= htmlspecialchars($task['title']) ?></strong>
                <p><?= htmlspecialchars($task['description']) ?></p>
            </div>
            <div class="task-actions">
                <a href="/toggle/<?= $task['id'] ?>"><?= $task['status'] ? 'Mark Incomplete' : 'Mark Complete' ?></a>
                <a href="/delete/<?= $task['id'] ?>" class="delete">Delete</a>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>