<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include("config.php");

// Ensure user is logged in before deleting
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Check if an ID is provided in the URL
if (isset($_GET["id"])) {
    $id = intval($_GET["id"]); // Convert to integer to prevent SQL injection

    // Prevent deleting the logged-in user
    if ($id == $_SESSION["user_id"]) {
        echo "<script>alert('You cannot delete your own account!'); window.location='dashboard.php';</script>";
        exit();
    }

    // Delete the user from the database
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo "<script>alert('User deleted successfully!'); window.location='dashboard.php';</script>";
        } else {
            echo "<script>alert('Error deleting user.'); window.location='dashboard.php';</script>";
        }
    } else {
        echo "<script>alert('SQL Error: " . $conn->error . "'); window.location='dashboard.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request.'); window.location='dashboard.php';</script>";
}
?>
