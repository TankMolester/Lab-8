<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

$pageTitle = 'Welcome';
include __DIR__ . '/includes/header.inc';
$user = htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
?>

<h1>Welcome, <?php echo $user; ?></h1>
<p>You are logged in successfully.</p>

<?php include __DIR__ . '/includes/footer.inc'; ?>
