<?php get_header(); ?>
	<div class="[ width--800p ][ margin-auto ]">
	<div class="row [ margin-bottom--large ]">
		<div class="col-sm-4">
			<!-- Portrait perfil -->
			<?php get_template_part( 'templates/portrait', 'perfil' ); ?>
		</div>
		<div class="col-sm-8">
			<h2 class="[ text-center ][ padding-bottom--small ][ color-primary ][ border-bottom--primary ][ margin-top--xxlarge ]">¡Descubre más del mundo yo-kai</h2>
		</div>
	</div>
	<div class="row [ margin-bottom--large ]">
		<div class="col-xs-12">
			<video class="[ max-width--100 ]">
				<source src="<?php echo THEMEPATH; ?>video/landing.mp4" type="video/mp4">
				<source src="<?php echo THEMEPATH; ?>video/landing.webm" type="video/webm">
				<source src="<?php echo THEMEPATH; ?>video/landing.ogv" type="video/ogg">
			</video>
			<h3 class="[ color-light ][ text-uppercase ]">Nombre del video 1</h3>
		</div>
	</div>
	<div class="row [ margin-bottom--large ]">
		<div class="col-xs-6">
			<video class="[ max-width--100 ]">
				<source src="<?php echo THEMEPATH; ?>video/landing.mp4" type="video/mp4">
				<source src="<?php echo THEMEPATH; ?>video/landing.webm" type="video/webm">
				<source src="<?php echo THEMEPATH; ?>video/landing.ogv" type="video/ogg">
			</video>
			<h3 class="[ color-light ][ text-uppercase ]">Nombre del video 2</h3>
		</div>
		<div class="col-xs-6">
			<video class="[ max-width--100 ]">
				<source src="<?php echo THEMEPATH; ?>video/landing.mp4" type="video/mp4">
				<source src="<?php echo THEMEPATH; ?>video/landing.webm" type="video/webm">
				<source src="<?php echo THEMEPATH; ?>video/landing.ogv" type="video/ogg">
			</video>
			<h3 class="[ color-light ][ text-uppercase ]">Nombre del video 3</h3>
		</div>
	</div>
	<div class="row [ margin-bottom--xxlarge ]">
		<div class="col-xs-6">
			<a href="#" class="[ text-decoration-none block ]">
				<img class="[ width--100 ]" src="<?php echo THEMEPATH; ?>images/productos.png" alt="productos">
				<h3 class="[ color-light ][ text-uppercase ][ color-primary--hover ]">Encuentra aquí los productos Yo-kai</h3>
			</a>
		</div>
		<div class="col-xs-6">
			<a href="#" class="[ text-decoration-none block ]">
				<img class="[ width--100 ]" src="<?php echo THEMEPATH; ?>images/mas-videos.png" alt="imagen más videos">
				<h3 class="[ color-light ][ text-uppercase ][ color-primary--hover ]">¡Mira más videos!</h3>
			</a>
		</div>
	</div>
</div>
<?php get_footer(); ?>