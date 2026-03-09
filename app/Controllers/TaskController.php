<?php
require_once __DIR__ . '/../Models/Task.php';

class TaskController {
    private $task;

    public function __construct() {
        $this->task = new Task();
    }

    public function index($status = null) {
        $tasks = $this->task->getAll($status);
        require __DIR__ . '/../Views/tasks/index.php';
    }

    public function create($title, $description) {
        $this->task->create($title, $description);
        header('Location: /');
    }

    public function toggle($id) {
        $this->task->toggleStatus($id);
        header('Location: /');
    }

    public function delete($id) {
        $this->task->delete($id);
        header('Location: /');
    }
}