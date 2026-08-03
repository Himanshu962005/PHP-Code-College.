<!-- Q7.Write a PHP Script to Read the Data from the Database and Display it into the Web Page in Tabular Form. -->
<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "registration_db";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed : " . $conn->connect_error);
}
$sql = "SELECT id, name, email, phone, address FROM students";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registered Students</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <h2>Registered Students</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['phone']) ?></td>
                    <td><?= htmlspecialchars($row['address']) ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No Records Found.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>

</html>
<?php $conn->close(); ?>