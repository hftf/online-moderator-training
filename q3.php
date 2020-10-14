<?php

$page = [
	'id'       => 'q3',
	'title'    => 'Question 3',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>You are moderating an online quizbowl tournament, and one of the two teams in your next round is late and can’t be located. What should you do? You may select more than one answer.</p>

<?php
make_quiz([
'A' => 'Notify the TD that your team is missing and cannot be located, and ask for further instructions.',
'B' => 'Check other rooms or channels to see if the missing team’s previous match is finished.',
'C' => 'Continue waiting for the team to show up, and don’t start reading without them unless the TD gives you permission to do so.',
'D' => 'Attempt to contact the missing team.',
'E' => 'Finish preparing for the next round by setting up the question window and preparing the scoresheet with the team that is present.',
]);
if (isset($_SESSION[$page['id']]) or defined('AGAIN')) {
?>

<h3>Explanation</h3>
<p><b>All answers</b> are correct. If a team is late, you should attempt to locate them by contacting them directly and/or looking in other game rooms or channels to see if their previous game is running long. If you are still unable to find them, you should <a href="how-to-report.php">let the TD know</a> and wait for their decision on when to start the game. In the meantime, you should set up for your next game so that you’ll be ready to begin quickly when the team arrives.</p>

<?php } require_once 'footer.php'; ?>
