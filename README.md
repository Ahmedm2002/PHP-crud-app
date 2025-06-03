# PHP User Management CRUD App

A simple User Management application built with **PHP**, **MySQL**, and **PDO**. This project performs basic **Create, Read, Update, Delete (CRUD)** operations and uses a `.env` file to manage database credentials securely.

---

## 📁 Project Structure

/myapp
├── index.php # Displays user list
├── create.php # Add new user
├── edit.php # Edit user
├── delete.php # Delete user
├── db.php # Database connection using PDO
├── .env # (Not committed) Environment variables
├── .gitignore # Ignores .env file
└── README.md # Project documentation

yaml
Copy
Edit

---

## ✅ Features

- View all users in a table
- Add new users
- Edit existing users
- Delete users
- PDO with prepared statements (secure)
- Uses `.env` file for credentials (safe)

---

## ⚙️ Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/myapp.git
cd myapp
2. Create .env File
Create a .env file in the project root:

ini
Copy
Edit
DB_HOST=localhost
DB_NAME=myappdb
DB_USER=your_mysql_user
DB_PASS=your_mysql_password
Note: This file is ignored in .gitignore for security.

3. Create MySQL Database and Table
Open your MySQL client and run:

sql
Copy
Edit
CREATE DATABASE myappdb;

USE myappdb;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL
);
4. Start Apache Server
If you're using XAMPP:

bash
Copy
Edit
sudo /opt/lampp/lampp start
Place the project in:

bash
Copy
Edit
/opt/lampp/htdocs/myapp
Or if using Apache directly on Fedora, place it in:

bash
Copy
Edit
/var/www/html/myapp
Then open:

arduino
Copy
Edit
http://localhost/myapp/index.php
🔐 Security
Uses PDO for secure DB operations.

Database credentials are stored in .env (not in code).

.env is listed in .gitignore.

🧑‍💻 Author
Ahmed Mujtaba
Computer Science Student – GitHub

📝 License
This project is licensed for educational use. You can use, modify, and share it freely.

yaml
Copy
Edit

---

Let me know if you'd like a version in **Urdu** or want me to generate a `create.sql` file for importing th
