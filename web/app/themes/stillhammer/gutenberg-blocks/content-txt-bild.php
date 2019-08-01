<?php
// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$id = 'txt-bild-'.$block['id'];

// get image field (array)
$item = get_field('items');

// create id attribute for specific styling
$bilder = get_field('bild');

// create id attribute for specific styling
$text = get_field('text');

?>

<section id="<?php echo $id; ?>" class="txt-bild">
	<div class="row">
		<div class="col-lg-9" data-flickity='{ "pageDots": true, "wrapAround": true, "prevNextButtons": true, "adaptiveHeight":false, "contain": true }'>
		<?php
			foreach ($bilder as $image):
				echo "<figure class='col-12 cover'><a href='".$image['sizes']['large']."' title='".$image['title']."' data-fancybox='gallery".$id."'><img src='".$image['sizes']['medium']."' alt='".$image['title']."' ></a></figure>";
			endforeach;
		?>
		</div>
		<div class="col-lg-3<?php echo ($item) ? ' item' : ''; echo ($block['align']=='right') ? ' order-lg-0' : '' ?>">
			<?php echo $text; ?>
		</div>
	</div>
</section>