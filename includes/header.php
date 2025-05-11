
<?php
    $baseUrl = '/Compass';
    if (!isset($pageTitle)) {
        $pageTitle = "Compass";
    }

    if (!isset($currentPage)) {
        $currentPage = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compass offers over 1,500 extreme adventure travel packages for thrill-seekers. Explore surfing, biking, trekking, and more.">
    <meta name="keywords" content="adventure travel, extreme adventures, surfing, biking, trekking, travel packages">
    <meta name="author" content="Compass">
    <title><?php echo $pageTitle; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Montserrat:wght@500;600&family=Adventure&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/style.css" >
</head>
<body>
    <header class="container margin-auto">
        <nav class="navbar" role="navigation" aria-label="Main navigation">
            <a href="<?php echo $baseUrl; ?>" class="logo">
                <img src="https://i.ibb.co/Pdkxtgb/compass-logo.png" alt="Compass Logo" class="logo-image">
            </a>
            <button class="mobile-menu-button" aria-label="Toggle mobile menu">☰</button>
            <div class="nav-links" role="menu">
                <a href="#trip-planner" role="menuitem">Trip Planner</a>
                <!-- <a href="#destinations" role="menuitem">Destinations</a> -->
                <a href="<?php echo $baseUrl; ?>/pages/destinations.php" role="menuitem" class="<?php echo ($currentPage == 'destinations') ? 'active' : ''; ?>">Destinations</a>
                <a href="#travel-log" role="menuitem">Travel Log</a>
            </div>
            <div class="auth-buttons">
                <a href="#login" class="btn btn-fill"><span class="heading-normal">Login</span></a>
                <a href="#create-account" class="btn btn-fill-alt"><span>Create Account</span></a>
            </div>
        </nav>
    </header>
<main>
    <div class="preloader">
        <div class="spinner"></div>
    </div>

    <button class="back-to-top" aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 19V5"></path>
            <path d="m5 12 7-7 7 7"></path>
        </svg>
    </button>