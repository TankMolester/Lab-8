<?php
session_start();

if (!isset($_SESSION['user'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $_SESSION['pendingBooking'] = $_POST;
    }

    header('Location: login.html');
    exit;
}

if (isset($_SESSION['pendingBooking']) && is_array($_SESSION['pendingBooking'])) {
    $booking = $_SESSION['pendingBooking'];
    unset($_SESSION['pendingBooking']);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $booking = $_POST;
} else {
    header('Location: register.html');
    exit;
}

$getBookingValue = static function (string $key, string $default = '') use ($booking): string {
    $value = $booking[$key] ?? $default;

    return is_string($value) ? trim($value) : $default;
};

$escape = static function (string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
};

$firstName = $escape($getBookingValue('firstname'));
$lastName = $escape($getBookingValue('lastname'));
$tour = $escape($getBookingValue('tour', 'Rohirrim Tour'));
$species = $getBookingValue('species');
$age = $escape($getBookingValue('age'));
$meal = $escape($getBookingValue('meal'));
$travellers = $escape($getBookingValue('travellers'));

$speciesMap = [
    'M' => 'Human',
    'D' => 'Dwarf',
    'E' => 'Elf',
    'H' => 'Hobbit'
];

$species = $escape($speciesMap[$species] ?? $species);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php if (isset($booking['firstname']) || isset($booking['lastname'])): ?>
        <p>
            Welcome <?php echo $firstName . ' ' . $lastName; ?>!<br>
            You are now booked on the <?php echo $tour; ?> tour.<br>
            Species: <?php echo $species; ?><br>
            Age: <?php echo $age; ?><br>
            Meal Preference: <?php echo $meal; ?><br>
            Number of travellers: <?php echo $travellers; ?>
        </p>
    <?php else: ?>
        <p>No booking details were submitted.</p>
    <?php endif; ?>
</body>
</html>
