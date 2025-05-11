<?php
    $pageTitle = "Devil's Tower Getaway";
    $currentPage = "devils-tower-rock-climb";
    $use_slider = true;
    include('../../includes/header.php');
?>

<section class="destination-banner desktop-spacing">
    <div class="container margin-auto">
        <div class="column destination-page-heading">
            <nav class="breadcrumb dark-hover" aria-label="Breadcrumb">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="<?php echo $baseUrl; ?>/pages/destinations.php">Featured Destinations</a></li>
                    <li aria-current="page"><?php echo $pageTitle; ?></li>
                </ol>
            </nav>
            <h1 class="heading-tight dark"><?php echo $pageTitle ?></h1>
            <p class="h5 max-768 margin-top-xs dark">Compass words hard to bring you the best possible trips for your rugged lifestyle. Here you'll find our latest travel packages suited for the adventurous spirit.</p>
        </div>
        <div class="column destination-page-banner devils-tower">
        </div>
    </div>
</section>

<section class="destination-content-container desktop-spacing custom-spacing large-spacing">
    <div class="container margin-auto destination-details-container">
        <div class="custom-spacing large-spacing">
            <div class="custom-spacing small-spacing">
                <h2 class="h3 no-letter-spacing">Destination Inclusions</h2>
                <div class="destination-pills">
                    <span class="pill pill-lodging">    
                        <img src="../../assets/icons/lodging.svg" alt="" aria-hidden="true" class="pill-icon">Lodging
                    </span>
                    <span class="pill pill-food">    
                    <img src="../../assets/icons/food.svg" alt="" aria-hidden="true" class="pill-icon">Food
                    </span>
                    <span class="pill pill-airfare">    
                    <img src="../../assets/icons/airfare.svg" alt="" aria-hidden="true" class="pill-icon">Airfare
                    </span>
                    <span class="pill pill-local-guide">    
                    <img src="../../assets/icons/local-guide.svg" alt="" aria-hidden="true" class="pill-icon">Local Guide
                    </span>
                </div>
            </div>

            <div class="custom-spacing xs-spacing">
                <h2 class="h6 font-body">Price</h2>
                <p class="h3 no-letter-spacing font-header no-margin destination-details-price">$740</h2>
            </div>
            
            <div class="custom-spacing xs-spacing">
                <h2 class="h6 font-body">Trip Duration</h2>
                <p class="h3 no-letter-spacing font-header no-margin destination-details-price">5 Days</h2>
            </div>

        </div>
        <div class="custom-spacing small-spacing">
            <h2 class="h3 no-letter-spacing">What to expect?</h2>
            <p class="h6 max-768 no-margin semi-transparent heading-loose">
                Wyoming's climbing Mecca, Devil's Tower, stands at 865 feet and offers the beginner or the expert climber 200 fun and challenging routes. (In fact, a 6-year-old boy conquered the Tower in 1994.) The array of cracks in the walls allows you to use your imagination as you test your climbing skills.
                President Teddy Roosevelt named Devils Tower the first national monument in 1906. Today, the park hosts approximately 450,000 visitors annually. And 5,000 of those visitors are climbers. But beware, environmentalists are trying to limit that number, so treat the park with respect.
            </p>
        </div>
    </div>
    <hr class="hr--subtle"/>
    <div class="container margin-auto destination-slide-container custom-spacing md-spacing">
        <div class="custom-spacing xs-spacing">
            <h2 class="h3 no-letter-spacing no-margin">Other things to do</h2>
            <p class="no-margin">Take a look at our slide show. We've got several snap shots of the area around your hotel, including some great places to eat, drink, or just hang out.</p>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="swiper-zoomable" src="../../assets/img/bike-new-zealand.jpeg" alt=""></div>
                <div class="swiper-slide"><img class="swiper-zoomable" src="../../assets/img/bike-new-zealand.jpeg" alt=""></div>
                <div class="swiper-slide"><img class="swiper-zoomable" src="../../assets/img/destinations-banner.jpeg" alt=""></div>
                <div class="swiper-slide"><img class="swiper-zoomable" src="../../assets/img/california-surfing-safari.jpeg" alt=""></div>
                <div class="swiper-slide"><img class="swiper-zoomable" src="../../assets/img/bike-new-zealand.jpeg" alt=""></div>
                <div class="swiper-slide"><img class="swiper-zoomable" src="../../assets/img/destinations-banner.jpeg" alt=""></div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>
</section>

<div id="image-modal" class="image-modal">
  <img id="modal-img" src="" alt="">
</div>

<?php include('../../includes/footer.php'); ?>