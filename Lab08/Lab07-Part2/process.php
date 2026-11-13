<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.html');
    exit;
}

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');
$token = trim($_POST['token'] ?? '');

if ($username === 'admin' && $password === 'password123' && $token === 'abc123') {
    session_regenerate_id(true);
    $_SESSION['user'] = $username;
    if (isset($_SESSION['pendingBooking'])) {
        header('Location: ProcessBooking.php');
    } else {
        header('Location: welcome.php');
    }
    exit;
}

$pageTitle = 'Login Error';
include __DIR__ . '/includes/header.inc';
?>

<h1>Login Error</h1>
<p>Invalid login. <a href="login.php">Try again</a></p>

<?php include __DIR__ . '/includes/footer.inc'; ?>
