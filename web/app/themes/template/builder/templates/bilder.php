<?php
$aktiv = get_sub_field( "aktiv");
$images = get_sub_field("bilder");

if ($aktiv && $images) {

	//get the other options
	$link = get_sub_field("verlinken");
	$size = get_sub_field( "imagesize");
	$classes = get_sub_field( "classes");
	$lazy = get_sub_field( "lazyload");

	//replace <!--title--> with ACF Field of Title
	$code = str_replace("<!--title-->", get_sub_field("title"), get_sub_field("code"));

	//where to add the gallery?
	$code = explode("<!--content-->", $code);

	//return the first part
	$return .= $code[0];

	//loop the images
	foreach($images as $image):
		$caption = $image['caption'];
		$return .= "<figure" . ( $classes ? " class='".$classes."'" : "").">" . ($link ? "<a href='".$image['sizes']['large']."' title='".$image['title']."' data-fancybox='gallery".get_row_index()."'>" : "" ). "<img " . ($lazy ? 'data-flickity-lazyload' : 'src') ."='".$image['sizes'][$size]."' alt='".$image['title']."' >". ( $link ? "</a>" : "" ). ( $caption ? '<figcaption>'.$caption.'</figcaption>' : '')."</figure>";
	endforeach;

	//return the closing part where $hierarchiematches
	$close[$hierarchie] = $code[1];
}
?>
