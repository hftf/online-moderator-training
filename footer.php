		<div class="actions">
			<?php
				if (!isset($buttons)) {
					$buttons = [['continue', 'Continue →']];
				}
				foreach ($buttons as $button) {
					echo '<p><input type="submit" name="' . $button[0] . '" value="' . $button[1] . '" /></p>';
				}
			?>
		</div>
	</form>

	</main>
	<?php if ($feedback) { ?>
	<form action="feedback.php" method="post" class="actions fb">
	<input type="hidden" name="section" value="<?php echo $page['id']; ?>" />
	<p style="flex-grow: 1;"><textarea name="feedback" rows="1"></textarea></p>
	<p><input type="submit" name="feedback-submit" value="Submit feedback on this section" /></p>
	</form>
	<?php } ?>

	<footer>
		<nav id="main">
		<?php
			define('AGAIN', true);
			module_nav();
		?>
		</nav>	

		<!-- <aside>
			<h2>Debug</h2>
			<h3>Session</h3><blockquote><pre><?php print_r($_SESSION); ?></pre></blockquote>
			<h3>Post</h3><blockquote><pre><?php print_r($_POST); ?></pre></blockquote>
		</aside> -->

		<div style="display: flex; justify-content: space-between;">
			<p><?php echo $modules_completed . ' of ' . $module_count; ?> sections completed. <a href="reset.php">Reset?</a></p>
			<p><?php 
			if (registered()) {
				echo 'Registered as ' .
					escapeoutput($_SESSION['registered']['name']) . 
					' (' . escapeoutput($_SESSION['registered']['email']) . ')';
			} else {
				echo 'Not yet registered. <a href="register.php">Register</a>';
			}
			?></p>
			<p style="color: #ccc;"><?php printf('%0.4f', microtime(true) - $time_start); ?>s</p>
		</div>
	</footer>
</body>
</html>
