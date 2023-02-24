<?php

// Database connection settings
define('DB_HOST', 'localhost');
define('DB_USER', 'your-db-username');
define('DB_PASSWORD', 'your-db-password');
define('DB_NAME', 'e_journal_db');

// Define user roles
define('ROLE_ADMIN', 1);
define('ROLE_AUTHOR', 2);
define('ROLE_REVIEWER', 3);
define('ROLE_CHEF_EDITOR', 4);
define('ROLE_SUB_EDITOR', 5);
define('ROLE_READER', 6);

// Define site settings
define('SITE_NAME', 'E-Journal');
define('UPLOADS_DIR', 'uploads/');

// Define email settings
define('EMAIL_FROM', 'youremail@example.com');
define('EMAIL_FROM_NAME', 'E-Journal');
define('EMAIL_SMTP_HOST', 'smtp.example.com');
define('EMAIL_SMTP_PORT', 587);
define('EMAIL_SMTP_AUTH', true);
define('EMAIL_SMTP_USERNAME', 'your-smtp-username');
define('EMAIL_SMTP_PASSWORD', 'your-smtp-password');
define('EMAIL_SMTP_SECURE', 'tls');

?>
