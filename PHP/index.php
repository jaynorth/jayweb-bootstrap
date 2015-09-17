<?php # Script 2.4 - index.php

/* 
 *  This is the main page.
 *  This page includes the configuration file, 
 *  the templates, and any content-specific modules.
 */

// Require the configuration file before any PHP code:
require('./includes/config.inc.php');

// Validate what page to show:
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} elseif (isset($_POST['p'])) { // Forms
    $p = $_POST['p'];
} else {
    $p = NULL;
}

// Determine what page to display:
switch ($p) {

    case 'dev':
        $page = 'dev.inc.php';
        $page_title = 'development';
        break;
    
    case 'contact':
        $page = 'contact.inc.php';
        $page_title = 'Contact Us';
        break;
    
    case 'photo':
        $page = 'photo.inc.php';
        $page_title = 'photography';
        break;
    case 'electrovintage':
        $page = 'electrovintage.inc.php';
        $page_title = 'Vintage Electronics';
        break;
    case 'vinyl':
        $page = 'vinyl.inc.php';
        $page_title = 'vinyl album covers';
        break;

    case 'temperature':
        $page = 'temperature.inc.php';
        $page_title = 'temperature converter';
        break;
    
    // Default is to include the main page. 
    default:
        $page = 'main.inc.php';
        $page_title = 'Jayweb';
        break;
        
} // End of main switch.

// Make sure the file exists:
if (!file_exists('./modules/' . $page)) {
    $page = 'main.inc.php';
    $page_title = 'Site Home Page';
}

// Include the header file:
include('./includes/header.php');

// Include the content-specific module:
// $page is determined from the above switch.
include('./modules/' . $page);

// Include the footer file to complete the template:
include('./includes/footer.php');

?>