<div class="project <?php echo h($name)?>">
	<div class="container">
		<?php if(projectExists($name)): ?>
			<?= p($name) ?>
		<?php else: ?>
			<p>Project &quot;<em><?= h($name) ?></em>&quot; niet gevonden.</p>
		<?php endif; ?>
	</div>
</div>
