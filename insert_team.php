<?php
include 'db.php';

$groups = $mysqli->query("SELECT * FROM groups");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $group_id = $_POST['group_id'];
    $team_name = $_POST['team_name'];
    $wins = $_POST['wins'];
    $draws = $_POST['draws'];
    $losses = $_POST['losses'];

    $mysqli->query("INSERT INTO uefa_teams (group_id, team_name, wins, draws, losses) VALUES ('$group_id', '$team_name', '$wins', '$draws', '$losses')");
}
?>

<form method="POST">
    Group: 
    <select name="group_id">
        <?php while ($group = $groups->fetch_assoc()): ?>
            <option value="<?= $group['id'] ?>"><?= $group['group_name'] ?></option>
        <?php endwhile; ?>
    </select><br>
    Team Name: <input type="text" name="team_name"><br>
    Wins: <input type="number" name="wins"><br>
    Draws: <input type="number" name="draws"><br>
    Losses: <input type="number" name="losses"><br>
    <button type="submit">Insert Team</button>
</form>
