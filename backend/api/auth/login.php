<?php
// Login API
header('Content-Type: application/json');
require_once '../../config/db.php';

// Start Session
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit;
}

// Get raw POST data
$data = json_decode(file_get_contents("php://input"));

// Validation
if (!isset($data->email) || !isset($data->password)) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit;
}

$email = trim($data->email);
$password = $data->password;

try {
    // Fetch User
    $stmt = $conn->prepare("SELECT user_id, full_name, password, role, status FROM users WHERE email = ?");
    $stmt->execute([$email]);
    
    if ($stmt->rowCount() === 0) {
        echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
        exit;
    }

    $user = $stmt->fetch();

    // Verify Password
    if (!password_verify($password, $user['password'])) {
        echo json_encode(['success' => false, 'message' => 'Invalid credentials']);
        exit;
    }
    
    // Check Status (Optional - if you want to block pending users)
    // if ($user['status'] === 'rejected') { ... }

    // Set Session Variables
    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['full_name'] = $user['full_name'];

    echo json_encode([
        'success' => true,
        'message' => 'Login successful',
        'data' => [
            'user_id' => $user['user_id'],
            'full_name' => $user['full_name'],
            'role' => $user['role'],
            'status' => $user['status']
        ]
    ]);

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
}
?>
