<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>artist</th>
                <th>location_id</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $database = "node";

            // Create a connection
            $connection = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($connection->connect_error) {
                die("Connection failed: " . $connection->connect_error);
            }

            // Query the database
            $query = "SELECT * FROM concerts";
            $result = $connection->query($query);

            // Output data
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['artist'] . "</td>
                            <td>" . $row['location_id'] . "</td>
                          </tr> 
                        
                          ";
                }
            } else {
                echo "<tr><td colspan='3'>No data available</td></tr>";
            }

            // Close the connection
            $connection->close();
        ?>
          <a href="test.php">test</a>
        </tbody>
    </table>
</body>
</html>
