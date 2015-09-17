<?php defined('_JEXEC') or die; ?>

<div id="slickSlider_<?= $random; ?>" class="slick-slider">
    <?php foreach($images as $image) : ?>
    <div><img class="ui image" src="<?= JUri::base() . $image; ?>" ></div>
    <?php endforeach; ?>
</div>

<script>

    jQuery(document).ready(function(){

        // Activate the front page slider
        $('#slickSlider_<?= $random; ?>').slick({
            infinite: true,
            autoplay: <?php print $params->get('autoplay') ? 'true' : 'false'; ?>,
            arrows: <?php print $params->get('show_arrows') ? 'true' : 'false'; ?>,
            dots: <?php print $params->get('show_dots') ? 'true' : 'false'; ?>,
            slidesToShow : <?php print $params->get('slides_to_show') ?  : '1'; ?>,
            slidesToScroll : <?php print $params->get('slides_to_show') ?  : '1'; ?>
        });

    });

</script>