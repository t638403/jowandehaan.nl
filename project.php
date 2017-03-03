<div class="project <?php echo h($_GET['name'])?>">
    <div class="container">

        <?php
			$dirs = scandir(__DIR__ . '/projects/');
			$foundProject = false;
			foreach($dirs as $dir)
			{
				if($dir == $_GET['name'])
				{
					$foundProject = true;
					break;
				}
			}
		?>

		<?php if($foundProject): ?>
			<?php include(__DIR__ . '/projects/' .  $_GET['name'] . '/index.php'); ?>
		<?php else: ?>
			<p>Project &quot;<em><?= h($_GET['name']) ?></em>&quot; niet gevonden.</p>
		<?php endif; ?>
    </div>
</div>