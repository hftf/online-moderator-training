<?php

$all_modules = [
	'Start here' => [
		'intro'            => [],
		'who-for'          => [],
		'overview'         => [],
		'register'         => [],
		'pre-train'        => [],
	],
	'General advice' => [
		'control'          => [],
		'reading'          => [],
		'misconduct'       => [],
		'protests'         => [],
		'how-to-report'    => [],
	],
	'Online-specific advice' => [
		'setup-env'        => [],
		'setup-screen'     => [],
		'testing'          => [],
		'when-to-start'    => [],
		'gameplay'         => [],
		'answers'          => [],
		'scorekeeping'     => [],
		'troubleshooting'  => [],
		'discord'          => [],
		'zoom'             => [],
	],
	'Review quiz' => [
		'q1'               => [],
		'q2'               => [],
		'q3'               => [],
		'q4'               => [],
		'q5'               => [],
		'q6'               => [],
		'q7'               => [],
		'q8'               => [],
		'conclusion'       => [],
	],
	// ],
];
function module_nav() {
	global $all_modules, $page, $tmp_page, $module_count, $modules_completed;
	$module_count = $modules_completed = 0;
	$tmp_page = $page;
	module_nav_aux($all_modules);
	$page = $tmp_page;
}
function module_nav_aux($modules) {
	global $page, $tmp_page, $module_count, $modules_completed;
	echo '<ol>';
	foreach ($modules as $module_id => $children) {
		echo "\n<li>";
		if ($module_id[0] < 'a') {
			echo '<h4>' . $module_id . '</h4>';
		} else {
			unset($page);
			$filename = $module_id . '.php';
			ob_start();
			require $filename;
			$buffer = ob_get_contents();
			ob_end_clean();
			$reading_time = (str_word_count(strip_tags($buffer)) / 200);
			$completed = isset($_SESSION[$module_id]);
			if ($module_id != 'conclusion') {
				$module_count ++;
				$modules_completed += $completed;
			}
			echo '<div><a href="' . $filename . '"' . (($tmp_page['id'] == $module_id) ? ' class="cur"' : '') . '><span class="bar">';
			if ($module_id[0] == 'q') {
				if ($completed) echo $_SESSION[$module_id]['correct?'];
				else echo '❓';
			}
			else if ($module_id != 'conclusion') {
				echo '<span style="width: ' . ceil($reading_time * 18) . 'px;"' . ($completed ? ' class="completed"' : '') . '></span>';
			}
			echo '</span>' . (isset($page['short']) ? $page['short'] : $page['title']) . '</a></div>';
		}
		if (is_array($children) and !empty($children)) {
			module_nav_aux($children);
		}
		echo '</li>';
	}
	echo '</ol>';
}
$prev = 'index';
$order = [];
foreach ($all_modules as $category => $modules) {
	foreach ($modules as $module => $_) {
		$order[$prev] = $module;
		$prev = $module;
	}
}
$order[$prev] = 'conclusion';
function get_next() {
	global $page, $order;
	$current_id = $page['id'];
	return $order[$current_id];
}

function make_quiz($choices) {
	global $page, $buttons;

	if (isset($_POST['quiz-submit']) and !isset($_SESSION[$page['id']])) {
		$corrects = array_filter(array_keys($choices), function($v) { return $v < 'a'; });
		$submitted = $_POST['quiz'] ?: [];
		$all_correct = (implode($corrects) == implode($submitted)) ? '💯' : '🥯';
		$_SESSION[$page['id']] = [
			'correct?' => $all_correct,
			'value'    => $submitted,
			'time'     => mytime(),
		];
	}

	$quiz_saved = isset($_SESSION[$page['id']]);
	if ($quiz_saved) {
		$submitted = $_SESSION[$page['id']]['value'];
	} else {
		$buttons = [['quiz-submit', 'Submit']];
	}

	echo '<ol class="quiz">';
	foreach ($choices as $letter => $choice) {
		echo '<li><label><input type="checkbox" name="quiz[' . $letter . ']" value="' . $letter . '" ';
		$tag = 'span';
		if ($quiz_saved) {
			echo 'disabled ';
			if (isset($submitted[$letter])) echo 'checked ';
			// $class = 'right';
			// if ($letter >= 'a' and isset($submitted[$letter])) $class = 'wrong';
			// if ($letter < 'a' and !isset($submitted[$letter])) $class = 'wrong';
			$truth = ($letter < 'a') ? 'u' : 's';
			$choice = "<$truth>$choice</$truth>";
		}
		echo '/> ';
		echo '<b>' . strtoupper($letter) . ".</b> <$tag>" . $choice . "</$tag>";
		echo '</label></li>';
	}
	echo '</ol>';
}

function registered() {
	return isset($_SESSION['registered']);
}

function mytime() { return date('Y-m-d H:i:s'); }
function escapeinput($data) { return trim($data); }
function escapeoutput($data) { return htmlspecialchars($data); }

?>
