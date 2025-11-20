<?php
// index.php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: insert.php');
    exit;
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Signup — Simulasi XSS</title>
</head>
<body>
  <h2>Signup — Simulasi XSS</h2>
  <form method="post" action="login.php">
    <label>Username: <input type="text" name="username"></label><br><br>
    <label>Password: <input type="password" name="password"></label><br><br>
    <button type="submit">add</button>
  </form>

  <p>Catatan: aplikasi ini sengaja sederhana (dan rentan) untuk tujuan latihan.</p>
</body>
</html>
