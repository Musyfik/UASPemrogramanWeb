<?php
include 'db.php';

$teams = $mysqli->query("SELECT * FROM uefa_teams");

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=UEFA_Report.xls");
?>

<table border="1">
    <tr>
        <th>Team Name</th>
        <th>Wins</th>
        <th>Draws</th>
        <th>Losses</th>
        <th>Points</th>
    </tr>
    <?php while ($team = $teams->fetch_assoc()): ?>
        <tr>
            <td><?= $team['team_name'] ?></td>
            <td><?= $team['wins'] ?></td>
            <td><?= $team['draws'] ?></td>
            <td><?= $team['losses'] ?></td>
            <td><?= $team['points'] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
