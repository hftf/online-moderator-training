<?php

$page = [
	'id'       => 'q1',
	'title'    => 'Question 1',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>Which option describes your past moderating experience?</p>
<?php
make_quiz([
'A' => 'Only online experience',
'B' => 'Only in-person experience',
'C' => 'Both online and in-person experience',
'D' => 'Neither online nor in-person experience',
]);
?>

<?php require_once 'footer.php'; ?>
