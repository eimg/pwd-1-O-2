<?php
    $id = $_GET['id'];

    $db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '');
    $result = $db->query("SELECT * FROM roles WHERE id = $id");
    $role = $result->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $role['id'] ?>">
        <input type="text" name="name" placeholder="Name"
            value="<?= $role['name'] ?>"> <br>
        <input type="text" name="value" placeholder="Value"
            value="<?= $role['value'] ?>"> <br><br>
        <button>Update</button>
    </form>
</body>
</html>