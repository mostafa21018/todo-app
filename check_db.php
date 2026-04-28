<?php
$conn = mysqli_connect("localhost", "root", "", "todo");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$result = mysqli_query($conn, "SHOW TABLES");
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        echo $row[0] . "\n";
    }
} else {
    echo "No tables found or query failed.\n";
}
mysqli_close($conn);
?>