# PHP MVC Todo Application

A simple Todo application

User can:

* Create tasks with title and description
* Mark tasks as complete or incomplete
* Delete tasks
* View all tasks
* Filter tasks by status (All / Active / Completed)


# Requirements

* PHP 8+
* MySQL
* WSL / Linux / macOS / Windows
* Web browser

---

# Setup Instructions

## 1. Clone or download the project

```
git clone <repository-url>
cd todo-app
```

Or download and extract the project folder.

---

## 2. Start MySQL

```
sudo service mysql start
```

---

## 3. Create Database

Import the provided SQL file:

```
mysql -u root -p < database.sql
```

This will create:

* database `todo_app`
* table `tasks`

---

## 4. Create Database User (Recommended)

Login to MySQL:

```
sudo mysql
```

Create user:

```
CREATE USER 'todo_user'@'localhost' IDENTIFIED BY 'password123';
GRANT ALL PRIVILEGES ON todo_app.* TO 'todo_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

---

## 5. Configure Database Connection

Open:

```
app/Core/Database.php
```

Update credentials if necessary:

```
host: localhost
database: todo_app
user: todo_user
password: password123
```

---

## 6. Start the PHP Development Server

Navigate to the **public** directory:

```
cd public
php -S localhost:8000
```

---

## 7. Open the Application

In your browser go to:

```
http://localhost:8000
```
