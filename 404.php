<!DOCTYPE html>
<html lang="es-EC">
    <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name='viewport' content='width=device-width,initial-scale=1'/>
		<?php wp_head(); ?>
		<title><?php wp_title(); ?></title>
    </head>
    <body class="error">
		<div class="error__block">
			<div class="error__block-content">
				<span>404</span>
				<p>Página no encontrada</p>
				<a class="btn" href="/">Ir a inicio</a>
			</div>
		</div>
    </body>
</html>
