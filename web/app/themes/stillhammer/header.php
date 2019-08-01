<?php
	$description = ( empty(get_field("meta_description")) ? get_field("meta_description",'option') : get_field("meta_description") );
	$meta = ( !empty(get_field("meta_keywords"))  ? get_field("meta_keywords") : get_field("meta_keywords",'option'));
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php echo ( get_field("noindex") === false || get_field("noindex", "option") == false  ? '<meta name="robots" content="noindex" />' :  ''); ?>
	<meta name="description" content="<?php echo $description ?>" />
	<meta name="keywords" content="<?php echo $meta ?>" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="wrapper">

  	<header class="splash">
    	<div class="container py-2 pt-md-4">
      	<div class="row justify-content-center">
        	<div class="col col-md-10 col-xl-8 p-4">
   					<h1 class="page-title text-center">
							<a class="col-9 col-md-4 logo" href="<?php bloginfo( 'url' ); ?>">
              	<img class="logo" src="<?php the_field("logo",'option') ?>" alt="<?php bloginfo( 'name' ); ?>" />
							</a>
            </h1>
        	</div>
        <div class="col-12 text-center">
        <?php
          if (have_rows("builder", 455)):
            builder("builder", 455);
          endif;
        ?>
        </div>
      	</div>
    	</div>
  	</header>

<div class="bggreen d-none d-md-block">
    <nav class="container">
      <div class="row justify-content-center py-3">

        <?php wp_nav_menu( array( 'theme_location' => 'top', 'container' => 'nav', 'container_class' => 'menu p-0', 'menu_class' => 'row align-items-center justify-content-end h-100 m-0 p-0', 'depth' => 0) ); ?>

      </div>
    </nav>
</div>

<button id="navtoggle" class="icon-bars col text-right d-md-none"></button>

	<main>
		<div id="main" class="anchor"></div>
