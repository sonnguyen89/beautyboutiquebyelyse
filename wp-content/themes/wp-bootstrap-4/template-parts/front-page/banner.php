<?php $banner_image = get_field('banner_image'); ?>
<?php if(isset($banner_image)): ?>
<div class="jumbotron hero-technology" style="background-image: url('<?php echo $banner_image['url'];  ?>')">
    <?php
    $banner_title = get_field('banner_title');
    if(isset($banner_title)): ?>
    <h1 class="hero-title">
        <?php echo $banner_title; ?>
    </h1>
    <?php endif; ?>

    <?php  $banner_subtitle = get_field('banner_subtitle');
    if(isset($banner_subtitle)): ?>
        <p class="hero-subtitle">
            <?php echo $banner_subtitle; ?>
        </p>
    <?php endif; ?>

    <?php $button = get_field('banner_button');
    if(isset($button)): ?>
        <p>
            <?php echo $button; ?>
        </p>
    <?php endif; ?>
</div>
<?php else: ?>
<div class="jumbotron hero-technology">
    <h1 class="hero-title">BEAUTY BOUTIQUE <br/> BY ELYSE
    </h1>
    <p class="hero-subtitle">Join your local beauty parlour.</p>
    <p><a class="btn hero-button" role="button" href="#front-page-booking-section">Book Now</a></p>
</div>
<?php endif; ?>

