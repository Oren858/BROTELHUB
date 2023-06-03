<html>
<body>
<?php
    include("db.php");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user = $_POST["adminid"];
    $pwd = $_POST["password"];
    $sql = "SELECT adminid, password FROM admin";
    $result = mysqli_query($conn, $sql);

    $loggedIn = false;

    while ($row = mysqli_fetch_row($result)) {
        if ($user == $row[0] && $pwd == $row[1]) {
            $loggedIn = true;
            break;
        }
    }

    if ($loggedIn) {
        header("Location: admin_view.php");
    } else {
        header("Location: admin_not_found.php");
    }

    mysqli_free_result($result);
?>
</body>
</html>
<html>
<body>
<?php
    include("db.php");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert query
    $sql = "INSERT INTO `admin` (`adminid`, `password`, `empid`) VALUES
            (?, ?, ?)";

    if ($conn->query($sql) === TRUE) {
        echo "Records inserted successfully.";
    } else {
        echo "Error inserting records: " . $conn->error;
    }

    $conn->close();
?>
</body>
</html>
