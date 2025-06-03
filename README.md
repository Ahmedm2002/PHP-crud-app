# PHP User Management CRUD App

A simple User Management application built with **PHP**, **MySQL**, and **PDO**.  
This project performs basic **Create, Read, Update, Delete (CRUD)** operations securely using prepared statements and manages database credentials through a `.env` file.

---

## 📁 Project Structure

```

/myapp
├── index.php          # Displays list of users
├── create.php         # Form to add a new user
├── edit.php           # Form to edit an existing user
├── delete.php         # Deletes a user
├── db.php             # Database connection using PDO with .env config
├── .env               # Environment variables (not committed)
├── .gitignore         # Ignores sensitive files like .env
└── README.md          # Project documentation

```

---

## ✅ Features

- View all users in a table
- Add new users with validation
- Edit existing user details
- Delete users
- Secure database access via PDO prepared statements
- Environment variables stored in `.env` file for improved security

---

## ⚙️ Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/Ahmedm2002/PHP-crud-app.git
cd PHP-crud-app
```

### 2. Create the `.env` File

Create a `.env` file in the root directory with your database credentials:

```ini
DB_HOST=localhost
DB_NAME=myappdb
DB_USER=your_mysql_user
DB_PASS=your_mysql_password
```

> **Note:** The `.env` file is excluded from version control via `.gitignore` for security.

### 3. Create the MySQL Database and Table

Log in to your MySQL server and run:

```sql
CREATE DATABASE myappdb;

USE myappdb;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL
);
```

### 4. Configure Your Web Server

- If using **XAMPP** on Linux, place the project inside `/opt/lampp/htdocs/myapp`
- If using **Apache** on Fedora, place the project inside `/var/www/html/myapp`

Start the server (XAMPP example):

```bash
sudo /opt/lampp/lampp start
```

### 5. Access the Application

Open your browser and navigate to:

```
http://localhost/myapp/index.php
```

---

## 🔐 Security Notes

- Database queries use PDO prepared statements to prevent SQL injection.
- Sensitive credentials are stored in `.env` and excluded from Git.
- Always keep your `.env` file private.

---

## 🧑‍💻 Author

**Ahmed Mujtaba**
Computer Science Student
[GitHub Profile](https://github.com/Ahmedm2002)

---

## 📝 License

This project is for educational purposes.
Feel free to use, modify, and distribute.
