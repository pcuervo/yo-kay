<?php get_header();
global $errors;
global $cargaMedalla;
global $idMedalla;
?>
	<div class="[ width--800p ][ margin-auto ]">
		<img class="[ absolute right--0 bottom--50 ]" src="<?php echo THEMEPATH; ?>images/fondo-cargar.png" alt="fondo de personajes">
		<div class="row [ margin-bottom--large ]">
			<div class="col-xs-5">
				<!-- Portrait perfil -->
				<?php get_template_part( 'templates/portrait', 'perfil' ); ?>
			</div>
			<div class="col-xs-7">
				<?php if($cargaMedalla != 1): ?>
					<h2 class="[ text-center ][ padding-bottom--small ][ color-primary ][ border-bottom--primary ][ margin-top--large1 ]">CARGA TU NUEVA MEDALLA EN TU ÁLBUM DIGITAL. </h2>
					<p class="[ text-center ][ margin-top ]">Introduce el código que aparece debajo del código QR en el revés de tu medalla.</p>
				<?php else: ?>
					<h2 class="[ text-center ][ padding-bottom--small ][ color-primary ][ border-bottom--primary ][ margin-top--large1 ]">¡LISTO, TIENES UNA NUEVA MEDALLA YO-KAI!</h2>
					<p class="[ text-center ][ margin-top ]">Ahora puedes cargar otra medalla o volver al álbum.</p>
				<?php endif; ?>
			</div>
		</div>
		<div class="row [ margin-bottom--xxlarge ]">
			<div class="col-xs-5">
				<?php $imagen = attachment_image_url( $idMedalla, 'full');
				$url_medalla = $cargaMedalla == 1 ? $imagen : THEMEPATH.'images/no-card--large.png';
				if($cargaMedalla == 1): ?>
					<img id="gifCargando" class="[ width--100 ][ gif-cargar ]" src="<?php echo THEMEPATH; ?>images/medalla.gif" alt="gif de interrogacion">
					<audio controls autoplay style="display: none;">
					  <source src="<?php echo THEMEPATH; ?>audio/medalla.ogg" type="audio/ogg">
					  <source src="<?php echo THEMEPATH; ?>audio/medalla.mp3" type="audio/mpeg">
					  <source src="<?php echo THEMEPATH; ?>audio/medalla.wav" type="audio/wav">
					</audio>
				<?php endif;
				$css_medalla = $cargaMedalla == 1 ? 'display: none;' : ''; ?>
				<img id="imgMedalla" class="[ width--100 ]" style="<?php echo $css_medalla; ?>" src="<?php echo $url_medalla; ?>" alt="imagen de interrogacion">
				<img class="[ width--100 ]" src="<?php echo THEMEPATH; ?>images/transparente.png" alt="imagen de interrogacion">
			</div>
			<div class="col-xs-7 [ text-center ][ padding-top--xlarge ]">
				<!-- Al cargar -->
				<form class="formCargaMedalla" method="POST" data-parsley-validate>
					<div class="form-group [ margin-bottom--large ]">
						<label class="" for="exampleInputMedalla"><small>Introdúcelo sin el espacio entre las letras y los números.<br /> Ejemplo: HAS1234 ó has1234</small></label>
						<input type="text" class="form-control" name="nuevaMedallaCompetitor" id="exampleInputMedalla" placeholder="Ingresa el código de tu medalla" aria-describedby="medallaHelp" required data-parsley-required-message="ESTE CAMPO ES OBLIGATORIO">
						<?php if ($errors != ''): ?>
							<ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required"><?php echo $errors; ?></li></ul>
						<?php endif; ?>
					</div>
					<div class="[ border-primary border-radius--20 ][ inline-block ]">
						<input type="hidden" name="action" value="cargar-nueva-medalla">
						<button type="submit" class="btn btn--primary">Cargar</button>
					</div>
				</form>
				<!-- Después de cargar -->
				<div id="textoCargaExitosa" class="[ text-center hidden ]">
					<div class="[ border-primary border-radius--20 ][ inline-block ][ margin-bottom ]">
						<a href="<?php echo site_url('/cargar/'); ?>" class="[ inline-block ][ btn btn--primary ][ text-center ][ margin-auto ]">Nueva carga</a>
					</div>
					<div class="[ border-primary border-radius--20 ][ inline-block ]">
						<a href="<?php echo site_url('/album/'); ?>" class="[ inline-block ][ btn btn--primary ][ text-center ][ margin-auto ]">Ir al álbum</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>