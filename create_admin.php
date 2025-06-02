<?php
include 'includes/db.php';    // ✅ Correct


$username = 'Sruthi';
$email = 'sruthi@gmail.com';
$password = password_hash('12345678', PASSWORD_DEFAULT); // Hashing the password
$role = 'admin';

$stmt = $conn->prepare("INSERT INTO users (username, email, password, role, created_at) VALUES (?, ?, ?, ?, NOW())");
$stmt->execute([$username, $email, $password, $role]);

echo "Admin user created successfully.";
?>
