<?php
require_once __DIR__ . '/../Core/Database.php';

class Task {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll($status = null) {
        if($status === 'active') {
            return $this->db->query("SELECT * FROM tasks WHERE status = 0 ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
        } elseif($status === 'completed') {
            return $this->db->query("SELECT * FROM tasks WHERE status = 1 ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return $this->db->query("SELECT * FROM tasks ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public function create($title, $description) {
        $this->db->query("INSERT INTO tasks (title, description) VALUES (?, ?)", [$title, $description]);
    }

    public function toggleStatus($id) {
        $task = $this->db->query("SELECT status FROM tasks WHERE id = ?", [$id])->fetch(PDO::FETCH_ASSOC);
        $newStatus = $task['status'] == 0 ? 1 : 0;
        $this->db->query("UPDATE tasks SET status = ? WHERE id = ?", [$newStatus, $id]);
    }

    public function delete($id) {
        $this->db->query("DELETE FROM tasks WHERE id = ?", [$id]);
    }
}