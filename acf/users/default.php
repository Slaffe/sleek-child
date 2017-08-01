<section id="users">

	<?php if ($data['users-title'] or $data['users-description']) : ?>
		<header>

			<?php if ($data['users-title']) : ?>
				<h2><?php echo $data['users-title'] ?></h2>
			<?php endif ?>

			<?php echo $data['users-description'] ?>

		</header>
	<?php endif ?>

	<?php foreach ($data['users-users'] as $user) : ?>
		<article>

			<figure>
				<?php echo get_avatar($user['ID'], 320) ?>
			</figure>

			<header>

				<h3><?php echo $user['display_name'] ?></h3>

				<?php if ($jobTitle = get_user_meta($user['ID'], 'job_title', true)) : ?>
					<p><?php echo $jobTitle ?></p>
				<?php endif ?>

			</header>

			<?php echo wpautop($user['user_description']) ?>

			<nav>

				<a href="mailto:<?php echo $user['user_email'] ?>" class="icon-mail"><?php echo $user['user_email'] ?></a>

				<?php if ($link = get_user_meta($user['ID'], 'tel', true)) : ?>
					<a href="tel:<?php echo $link ?>" class="icon-phone"><?php echo $link ?></a>
				<?php endif ?>

				<?php if ($user['user_url']) : ?>
					<a href="<?php echo $user['user_url'] ?>" target="_blank" class="icon-globe"><?php echo $user['user_url'] ?></a>
				<?php endif ?>

				<?php if ($link = get_user_meta($user['ID'], 'facebook', true)) : ?>
					<a href="//www.facebook.com/<?php echo $link ?>" target="_blank" class="icon-facebook"><?php echo $link ?></a>
				<?php endif ?>

				<?php if ($link = get_user_meta($user['ID'], 'twitter', true)) : ?>
					<a href="//twitter.com/<?php echo $link ?>" target="_blank" class="icon-twitter"><?php echo $link ?></a>
				<?php endif ?>

				<?php if ($link = get_user_meta($user['ID'], 'linkedin', true)) : ?>
					<a href="//www.linkedin.com/in/<?php echo $link ?>" target="_blank" class="icon-linkedin"><?php echo $link ?></a>
				<?php endif ?>

				<?php if ($link = get_user_meta($user['ID'], 'instagram', true)) : ?>
					<a href="//www.instagram.com/<?php echo $link ?>" target="_blank" class="icon-instagram"><?php echo $link ?></a>
				<?php endif ?>

				<?php if ($link = get_user_meta($user['ID'], 'googleplus', true)) : ?>
					<a href="//plus.google.com/<?php echo $link ?>" target="_blank" class="icon-googleplus"><?php echo $link ?></a>
				<?php endif ?>

			</nav>

		</article>
	<?php endforeach ?>

</section>
