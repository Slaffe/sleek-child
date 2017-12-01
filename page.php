<?php get_header() ?>

<main>

	<?php get_template_part('modules/page') ?>

	<?php if (!post_password_required()) : ?>
		<?php comments_template('/modules/comments.php') ?>
		<?php get_template_part('modules/post-comment') ?>
		<?php sleek_acf_render_modules('below-content') ?>
	<?php endif ?>

</main>

<?php get_sidebar() ?>
<?php get_footer() ?>
