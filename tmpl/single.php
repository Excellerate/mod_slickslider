<?php defined('_JEXEC') or die; ?>
<?= $cover ? '<div class="'.$cover.' slick-cover"></div>' : null; ?>
<div id="slickSlider_<?= $random; ?>" class="slick-slider">
	<?php foreach($images as $k => $image) : ?>
	<?php if( !empty($links[$k]) ) : ?>
	<a target="_blank" href="<?= $links[$k]; ?>">
	<?php endif; ?>
		<img class="ui fluid image" src="<?= JUri::base() . $image; ?>">
	<?php if( !empty($links[$k]) ) : ?>
	</a>
	<?php endif; ?>
	<?php endforeach; ?>
</div>