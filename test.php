<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Record</title>
</head>
<body>
    <h1>Add New Record</h1>

    <form action="process_form.php" method="POST">
        <label for="artist">Artist:</label>
        <input type="text" id="artist" name="artist" required><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br>

        <input type="submit" value="Add Record">
    </form>
</body>
</html>
