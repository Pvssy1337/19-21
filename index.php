<?php

$dbhost = "ps12356.mysql.tools";
$username = "ps12356_php";
$password = "V7g_3Uv9-j";
$database = "ps12356_php";

$conn = new mysqli($dbhost, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed, error:<b> " . $conn->connect_error . "</b>");
}

// echo "Connection good";

$sql = "SELECT * FROM `pk`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>ID</th>
    <th>Назва процесора</th>
    <th>Частота</th>
    <th>Пам'ять</th>
    <th>HDD</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["nameProc"] . "</td>
        <td>" . $row["frequencyProc"] . "</td>
        <td>" . $row["RAM"] . "</td>
        <td>" . $row["HDD"] . "</td>

        </tr>";
    }

    echo "</table>";
} else {
    echo "No records";
}

// $sql = "INSERT INTO pk (nameProc, frequencyProc, RAM, HDD) VALUES ('Intel', 4.2, 8, 1500)";
// $conn->query($sql);

// $sql = "INSERT INTO pk (nameProc, frequencyProc, RAM, HDD) VALUES ('AMD', 2.9, 12, 200)";
// $conn->query($sql);

// $sql = "UPDATE pk SET nameProc='NewProcessor' WHERE id=4";
// $conn->query($sql);

// $sql = "UPDATE pk SET nameProc='AnotherProcessor' WHERE id=1";
// $conn->query($sql);

// $sql = "DELETE FROM pk WHERE id=5";
// $conn->query($sql);

$conn->close();
