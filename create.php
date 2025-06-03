<?php 
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
    $stmt->execute(['name' => $name, 'email' => $email]);

    header("Location: index.php");
    exit(); // Always good to add this after header redirects
}
?>

<h2>Create User</h2>
<form method="post">
  Name: <input name="name"><br>
  Email: <input name="email"><br>
  <button type="submit">Create</button>
</form>
