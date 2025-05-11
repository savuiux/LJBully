</main>
    <footer>
        <div class="footer-links">
            <a href="#trip-planner">Trip Planner</a>
            <a href="#destinations">Destinations</a>
            <a href="#travel-log">Travel Log</a>
        </div>
        <div class="footer-logo">
            <img src="https://i.ibb.co/Pdkxtgb/compass-logo.png" alt="Compass Logo">
        </div>
        <div class="footer-text">
            Your gateway to over 1,500 epic adventures. Explore boldly. Travel smart.
        </div>
    </footer>
    <script src="<?php echo $baseUrl; ?>/assets/js/core.js"></script>
    <?php if (!empty($use_slider)): ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            slidesPerView: 3,
            // slidesPerGroup: 3,
            spaceBetween: 24,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    </script>
    <?php endif; ?>
</body>
</html>