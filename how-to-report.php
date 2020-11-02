<?php

$page = [
	'id'       => 'how-to-report',
	'short'    => 'How to report issues',
	'title'    => 'How to report issues to a TD (or to a designated staffer)',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<p>Various sections of this training mention reporting issues to the TD (tournament director) or a designated staffer. This section contains guidance for how, and under what circumstances, you should report those issues.</p>

<p>Since tournaments have different setups, your TD should tell you their preferred method for reporting issues to them. If they don’t tell you, ask them. Some common options are:</p>
<ul>
	<li><p>Via a secure text channel (e.g. “<code>#moderators</code>”) only for the TD and moderators</p>
		<ul>
			<li>Pro: seen by all moderators, who could help you if needed</li>
			<li>Con: seen by all moderators, could distract them mid-match</li>
		</ul>
	</li>
	<li><p>Via private message (PM), a.k.a. direct message (DM), to the TD</p>
		<ul>
			<li>Pro: only seen by the TD, could get the attention of the TD</li>
			<li>Con: could distract busy TD mid-match</li>
		</ul>
	</li>
</ul>

<p>While you should feel able to report any issue to the TD, not all issues need to be flagged immediately:</p>
<ul>
	<li><p>Report issues that actively impact the progression of a game immediately, such as: <a href="troubleshooting.php">technical or connection problems</a> on your end, a player who <a href="misconduct.php">continually disrupts</a> the match and refuses to stop, or <a href="when-to-start.php">absent teams</a> (unless the TD has explicitly instructed you to start at a particular time even if not all team members are present).</p></li>
	<li><p>Report <a href="protests.php">protests</a> that could affect the outcome of a match after the match is over.</p></li>
	<li><p>For other issues, use your judgment. Be proactive about reporting <a href="misconduct.php">cheating or misconduct</a>, but your main role during a round is to keep it moving. You can use the time between rounds to report such issues or ask your scorekeeper to do so.</p></li>
</ul>

<?php require_once 'footer.php'; ?>
