<div class="destination-block">
  <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($alt ?? 'Destination image'); ?>" class="destination-image <?php echo trim('destination-block ' . ($class ?? '')); ?> ">

  <div class="destination-content">
    <div class="destination-main">
      <div class="destination-header">
        <h2 class="destination-title h3"><?php echo htmlspecialchars($title); ?></h2>
        <span class="destination-price h2">$<?php echo number_format((float) $price, 0); ?></span>
      </div>

      <?php if (!empty($features)): ?>
        <div class="destination-pills">
          <?php foreach ($features as $feature): ?>
            <span class="pill pill-<?php echo strtolower(str_replace(' ', '-', $feature)); ?>">    
              <img src="../assets/icons/<?php echo strtolower(str_replace(' ', '-', $feature)); ?>.svg" alt="" aria-hidden="true" class="pill-icon">
              <?php echo htmlspecialchars($feature); ?>
            </span>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>

    <?php if (!empty($description)): ?>
      <div class="destination-description">
        <p class="h6"><?php echo htmlspecialchars($description); ?></p>
      </div>
    <?php endif; ?>

    <div class="destination-footer">
      <a href="<?php echo htmlspecialchars($url); ?>" class="destination-button font-header heading-loose">More details</a>
    </div>
  </div>
</div>