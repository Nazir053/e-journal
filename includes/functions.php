<?php

require_once('db.php');

// Function to sanitize user input
function sanitize_input($input) {
    global $mysqli;
    return $mysqli->real_escape_string(trim($input));
}

// Function to get user role name
function get_role_name($role_id) {
    switch ($role_id) {
        case ROLE_ADMIN:
            return 'Administrator';
        case ROLE_AUTHOR:
            return 'Author';
        case ROLE_REVIEWER:
            return 'Reviewer';
        case ROLE_CHEF_EDITOR:
            return 'Chief Editor';
        case ROLE_SUB_EDITOR:
            return 'Sub Editor';
        case ROLE_READER:
            return 'Reader';
        default:
            return '';
    }
}

// Function to get user by ID
function get_user_by_id($user_id) {
    global $mysqli;
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}

// Function to upload user profile picture
function upload_profile_picture($file, $user_id) {
    global $mysqli;
    $target_dir = UPLOADS_DIR . 'profile_pictures/';
    $target_file = $target_dir . $user_id . '_' . basename($file['name']);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $allowed_types = array('jpg', 'jpeg', 'png');
    if (in_array($imageFileType, $allowed_types)) {
        if (move_uploaded_file($file['tmp_name'], $target_file)) {
            // Update user profile picture filename in database
            $sql = "UPDATE users SET profile_picture = '$target_file' WHERE id = $user_id";
            $mysqli->query($sql);
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

?>
