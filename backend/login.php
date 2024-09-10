<?php
// Dummy user data
$users = array(
    "user1" => "password1",
    "user2" => "password2"
);

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
$password = $data['password'];

if (isset($users[$username]) && $users[$username] === $password) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error"));
}
?>
# Rename current branch to 'main' (if necessary)
git branch -M main
