# Setup

1. Start MySQL

```
sudo service mysql start
```

2. Create the database and tables

From the project root run:

```
mysql -u root -p < database.sql
```

3. (Optional) Create a dedicated database user

Login to MySQL:

```
sudo mysql
```

Create a user and grant access to the database:

```
CREATE USER 'todo_user'@'localhost' IDENTIFIED BY 'password123';
GRANT ALL PRIVILEGES ON todo_app.* TO 'todo_user'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

If you create this user, update the credentials in:

```
app/Core/Database.php
```

4. Start the PHP development server

Run the server from the `public` directory:

```
cd public
php -S localhost:8000
```

5. Open the application in the browser

```
http://localhost:8000
```
