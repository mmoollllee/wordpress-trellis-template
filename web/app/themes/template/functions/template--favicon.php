<?php

/*
  Generate at https://realfavicongenerator.net/
*/

add_action( 'wp_head', function () { ?>
	<meta name="theme-color" content="#e10079"/>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'url' ); ?>/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'url' ); ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'url' ); ?>/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo( 'url' ); ?>/favicons/site.webmanifest">
	<link rel="mask-icon" href="<?php bloginfo( 'url' ); ?>/favicons/safari-pinned-tab.svg" color="#0093bd">
	<link rel="shortcut icon" href="<?php bloginfo( 'url' ); ?>/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="msapplication-config" content="<?php bloginfo( 'url' ); ?>/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
<?php } );
