<?php
session_start();
require_once('config.php');
require_once('db.php');
require_once('functions.php');

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    $user = get_user_by_id($_SESSION['user_id']);
} else {
    $user = false;
}

// Set page title
$page_title = 'E-Journal';

// Include header
include('header.php');

// Show different content based on user role
if ($user && $user['role'] == ROLE_ADMIN) {
    // Show admin dashboard
    include('admin_dashboard.php');
} else if ($user && $user['role'] == ROLE_AUTHOR) {
    // Show author dashboard
    include('author_dashboard.php');
} else if ($user && $user['role'] == ROLE_REVIEWER) {
    // Show reviewer dashboard
    include('reviewer_dashboard.php');
} else if ($user && ($user['role'] == ROLE_CHEF_EDITOR || $user['role'] == ROLE_SUB_EDITOR)) {
    // Show editor dashboard
    include('editor_dashboard.php');
} else {
    // Show reader homepage
    include('reader_homepage.php');
}

// Include footer
include('footer.php');
?>
