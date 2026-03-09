CREATE DATABASE todo_app;
USE todo_app;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    status TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tasks (title, description, status) VALUES
('Buy groceries', 'Milk, Bread, Eggs, Butter', 0),
('Complete project report', 'Finish the report by end of the week', 0),
('Call John', 'Discuss the meeting agenda', 1);