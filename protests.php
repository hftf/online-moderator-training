<?php

$page = [
	'id'       => 'protests',
	'title'    => 'Protests',
];

require_once 'header.php';

?>

<h2><?php echo $page['title']; ?></h2>

<ul>
	<li>
		<p>If a team protests, you or your scorekeeper should <mark>quickly take note of the protest in the scoresheet</mark>. For substantive protests, this note should include:</p>
		<ul>
			<li>which question is under protest, plus
				<ul>
					<li>for a tossup: where the buzz occurred</li>
					<li>for a bonus: which bonus part</li>
				</ul>
			</li>
			<li>what answer was given</li>
			<li>your ruling on that answer (accept, prompt, deny)</li>
			<li>the issue under protest (e.g., it should or should not have been accepted or prompted)</li>
			<li>the potential point swing (how the score would change if the protest were upheld)</li>
		</ul>
	</li>
	<li><p><mark>You are not responsible for resolving protests</mark>, so don’t get into a long debate with players about whether a protest is right or wrong. Make a ruling, note the protest in the scoresheet, and move on.</p></li>
	<li><p>At the end of the game, if any protest could change the game result, gather any needed additional information about the protests from the teams and <a href="how-to-report.php">officially report it to the TD</a>. Since protests must be judged fairly and anonymously, <mark>do not reveal which teams or players are involved</mark>.</p></li>
	<li><p><a href="https://acf-quizbowl.com/gameplay-rules/#h-protests">Section H of ACF’s gameplay rules</a> covers protests. Depending on the tournament rules, some issues are not protestable, including moderator judgment. If you’re not sure if something is protestable, just mark a protest anyway, move on, and let the TD make the final determination. Trying to litigate whether or not something is protestable delays the match and, potentially, the whole tournament.</p></li>
</ul>

<h3>How to calculate the point swing</h3>
<ul>
	<li>
		<p>For a tossup, the swing is the sum of the values in the table below. It can range from 40 up to 80 <span class="gray">(or 90*)</span> points.</p>
		<table border="1">
			<thead>
				<tr><td></td><th>Protesting team</th><th>Opponent</th></tr>
			</thead>
			<tbody>
				<tr>
					<th>Tossup</th>
					<td>10<br />
						+ 5 if neg<br />
						<span class="gray">+ 5 if would have been power*</span></td>
					<td>points scored (0, 10, <span class="gray">or 15*</span>)</td>
				</tr>
				<tr>
					<th>Bonus</th>
					<td>30</td>
					<td>points scored (0, 10, 20, or 30)</td>
				</tr>
			</tbody>
		</table>
		<p class="gray">* only in formats with powers</p>
	</li>
	<li><p>For a bonus, the swing is 10 points per bonus part under protest.</p></li>
</ul>

<?php require_once 'footer.php'; ?>
