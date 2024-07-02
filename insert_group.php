<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $group_name = $_POST['group_name'];

    $mysqli->query("INSERT INTO groups (group_name) VALUES ('$group_name')");
}
?>

<form method="POST">
    Group Name: 
    <select name="group_name">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
    </select><br>
    <button type="submit">Insert Group</button>
</form>
