<?php defined('_JEXEC') or die; ?>
<?= $cover ? '<div class="'.$cover.' slick-cover" style="height:'.$height.'px;"></div>' : null; ?>
<div id="slickSlider_<?= $random; ?>" class="slick-slider" style="height:<?= $height; ?>px;">
	<?php foreach($images as $k => $image) : ?>
	<?php if( !empty($links[$k]) ) : ?>
	<a target="_blank" href="<?= $links[$k]; ?>">
	<?php endif; ?>
		<div class="image" style="background-image:url(<?= JUri::base() . $image; ?>); height:<?= $height; ?>px;"></div>
	<?php if( !empty($links[$k]) ) : ?>
	</a>
	<?php endif; ?>
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