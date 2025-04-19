<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta http-equiv="refresh" content="3;url=homepage.html"> <!-- Redirect setelah 3 detik -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      text-align: center;
      padding-top: 100px;
      background-color: #f6f6f6;
    }
    h1 {
      color: #003049;
    }
    p {
      color: #555;
    }
  </style>
</head>
<body>
  <h1>Selamat datang, <?= htmlspecialchars($_SESSION['user']) ?>!</h1>
  <p>Anda akan diarahkan ke homepage dalam beberapa detik...</p>
</body>
</html>
