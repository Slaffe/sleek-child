<?php if ($data['buttons']) : ?>
	<nav class="buttons">

		<?php foreach ($data['buttons'] as $button) : ?>
			<?php
				$url = $button['button-url'];
				$title = $button['button-title'];
				$target = strpos($url, 'http') === 0 ? 'target="_blank"' : '';
				$color = $button['button-color'];
				$ghost = $button['button-ghost'] ? 'button--ghost' : '';
				$icon = 'right'; # TODO: $button-icon
			?>
			<a href="<?php echo $url ?>"
				<?php echo $target ?>
				class="button button--<?php echo $color ?> <?php echo $ghost ?> <?php if ($icon) : ?>icon-<?php echo $icon ?> icon--after<?php endif ?>">
				<?php echo $title ?>
			</a>
		<?php endforeach ?>

	</nav>
<?php endif ?>