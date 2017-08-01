<section id="contact-form">

	<?php if ($data['contact-form-title'] or $data['contact-form-description']) : ?>
		<header>

			<?php if ($data['contact-form-title']) : ?>
				<h2><?php echo $data['contact-form-title'] ?></h2>
			<?php endif ?>

			<?php echo $data['contact-form-description'] ?>

		</header>
	<?php endif ?>

	<?php echo do_shortcode('[contact-form-7 id="' . $data['contact-form-id'] . '"]') ?>

</section>
