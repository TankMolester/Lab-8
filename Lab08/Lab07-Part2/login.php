<?php
session_start();
$pageTitle = 'Login';
include __DIR__ . '/includes/header.inc';
?>

<h1>Login</h1>
<form method="post" action="process.php">
    <p>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
    </p>

    <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </p>

    <input type="hidden" name="token" value="abc123">
    <button type="submit">Login</button>
</form>

<?php include __DIR__ . '/includes/footer.inc'; ?>
