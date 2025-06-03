<?php
include 'db.php';

$id = $_GET["id"];

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->execute([$name, $email, $id]);

    header("Location: index.php");
    exit;
}

// Fetch user info to edit
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Edit User</h2>
<form method="post">
  Name: <input name="name" value="<?= htmlspecialchars($row['name']) ?>"><br>
  Email: <input name="email" value="<?= htmlspecialchars($row['email']) ?>"><br>
  <button type="submit">Update</button>
</form>
