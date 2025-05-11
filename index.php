<?php
    $pageTitle = "Home";
    include('includes/header.php');
?>

<section class="hero" id="home">
    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e" alt="Compass adventure background" class="hero-image" loading="lazy">
    <div class="hero-content">
        <h1>Welcome to Compass</h1>
        <p>Currently we have over <strong>1,500 extreme adventures</strong> for you to drool over. From surfing <strong>40 foot waves</strong> in the middle of the ocean to fishing for <strong>piranha in the Amazon</strong>, we've got it all. So take your pick:</p>
        <a href="#destinations" class="btn">
            Learn More About
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="m12 5 7 7-7 7"></path>
            </svg>
        </a>
    </div>
</section>

<section class="featured" id="destinations">
    <div class="cards">
        <div class="card base-card">
            <div class="base-card-image">
                <img src="https://d3f9k0n15ckvhe.cloudfront.net/wp-content/uploads/2016/05/fly-fishing-925142.jpg" alt="Fly Fishing in the Rocky Mountains" loading="lazy">
            </div>
            <div class="base-card-content">
                <div class="base-card-title">Fly Fishing in the Rocky Mountains</div>
                <p>You'll get a seasoned guide and lots of dehydrated ravioli.</p>
            </div>
        </div>
        <div class="card base-card">
            <div class="base-card-image">
                <img src="https://bbxrafting.com/wp-content/uploads/2015/11/cota9-855x470.jpg" alt="Level 5 Rapids" loading="lazy">
            </div>
            <div class="base-card-content">
                <div class="base-card-title">Level 5 Rapids</div>
                <p>Put your helmet on and grab your wetsuit. It's time to conquer Siberia.</p>
            </div>
        </div>
        <div class="card base-card">
            <div class="base-card-image">
                <img src="https://stateofwatourism.com/wp-content/uploads/2023/08/Kayaking-Bellingham-Credit-Moondance6-600x400.jpg" alt="Puget Sound Kayaking" loading="lazy">
            </div>
            <div class="base-card-content">
                <div class="base-card-title">Puget Sound Kayaking</div>
                <p>One week of ocean kayaking in the Puget Sound.</p>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>