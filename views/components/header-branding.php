<div class="app-header__branding">

	<?php if (has_custom_logo()) : ?>

		<?= get_custom_logo(); ?>

	<?php else : ?>

		<a class="app-header__logo-link" href="<?= get_permalink(); ?>">
			<div class="app-header__logo">
				<?= \Forsite\Tools\Svg::render( 'meh' ); ?>
			</div>
		</a>

	<?php endif; ?>

	<?= Hybrid\Site\render_title( [ 'class' => display_header_text() ? 'app-header__title' : 'app-header__title screen-reader-text' ] ); ?>

	<?= Hybrid\Site\render_description( [ 'class' => display_header_text() ? 'app-header__description' : 'app-header__description screen-reader-text' ] ); ?>

</div>
