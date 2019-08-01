</main>

	<footer id="footer" class="bgblue">
		<div class="container row">
			<div class="col-12 text-center">
        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => '', 'depth' => 0) ); ?>
 			</div>
		</div>
	</footer>

</div><!--#wrapper-->

<nav id="responsivemenu" class="bgblue">
	<?php wp_nav_menu( array( 'theme_location' => 'top', 'container' => false, 'menu_class' => '', 'depth' => 0) ); ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => '', 'depth' => 0) ); ?>
</nav>

<?php wp_footer(); ?>

</body>
</html>
