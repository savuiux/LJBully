<?php
    $pageTitle = "Featured Destinations";
    $currentPage = "destinations";
    include('../includes/header.php');

    $destinations = [
        [
            "image" => "../assets/img/california-surfing-safari.jpeg",
            "alt" => "California Surfing Safari",
            "title" => "California Surfing Safari",
            "price" => "960",
            "description" => "Be ready to go on a moment's notice. We will  call you when the surf is pumping and fly you out for five mornings of hurricane inspired summertime southern swells.",
            "features" => ["Lodging", "Food", "Airfare", "Local Guide"],
            "link" => "../pages/destinations/california-surfing-safari.php",
        ],
        [
            "image" => "../assets/img/bike-new-zealand.jpeg",
            "alt" => "Bike New Zealand",
            "class" => "reverse",
            "title" => "Bike New Zealand",
            "price" => "1490",
            "description" => "Beautiful scenery combined with steep inclines and fast roads allowed for some great cycling. Don't forget the helmet!!",
            "features" => ["Lodging", "Food", "Airfare", "Local Guide"],
            "link" => "../pages/destinations/bike-new-zealand.php",
        ],
        [
            "image" => "../assets/img/devils-tower-rock-climb.jpeg",
            "alt" => "Devil's Tower Rock Climb",
            "title" => "Devil's Tower Rock Climb",
            "price" => "740",
            "description" => "In this three day trip you'll scale the majestic cliffs of beautiful Devil's Tower, Wyoming.",
            "features" => ["Lodging", "Food", "Airfare", "Local Guide"],
            "link" => "../pages/destinations/devils-tower-rock-climb.php",
        ]
        
    ];
?>

<section class="banner">
    <div class="banner-overlay">
        <div class="container margin-auto">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li aria-current="page">Featured Destinations</li>
                </ol>
            </nav>
            <h1 class="heading-loose">Featured Destinations</h1>
            <p class="h5 max-768 no-margin-top">Compass words hard to bring you the best possible trips for your rugged lifestyle. Here you'll find our latest travel packages suited for the adventurous spirit.</p>
        </div>
    </div>
</section>

<section class="container margin-auto desktop-spacing">
    <div class="destinations-vertical">
        <?php foreach ($destinations as $d): ?>
            <?php
            $image = $d['image'];
            $alt = $d['alt'];
            $title = $d['title'];
            $price = $d['price'];
            $features = $d['features'];
            $description = $d['description'];
            $url = $d['link'];
            $class = isset($d['class']) ? $d['class'] : null;
            include('destination-block.php');
            ?>
        <?php endforeach; ?>
    </div>
</section>

<?php include('../includes/footer.php'); ?>