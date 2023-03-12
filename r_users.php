<?php

echo '<link rel="stylesheet" type="text/css" href="list.css">';

session_start();

if (isset($_SESSION['id'])) {
    echo "<br>";
    echo "<br>";
} else {
    header("location: login.php");
    exit;
}
// connect to db
$conn = mysqli_connect("localhost", "root", "", "Web_project");
if (!$conn) {
    echo mysqli_connect_error();
    exit;
}

$query = "select * from users4 where `gender` IS NOT NULL";

$idfromcookie = $_COOKIE['user_id'];


// select all users
$result = mysqli_query($conn, $query);
?>

<html>


<body>

    <table>
        <caption>Registered Users</caption>
        <thead>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th id="m">EMAIL</th>
                <th>PHONE NUMBER</th>
                <th>TICKETS</th>
                <th>AGE</th>
                <th>GENDER</th>
                <th>COUNTRY</th>
                <th>UNIVERSITY</th>
                <th>COLLEGE</th>
                <th>MAJOR</th>
                <th>LEVEL</th>
                <th></th>
            </tr>
        </thead>

        <?php
        // loop on row set
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['username'] ?></td>
                <td id="m"><?= $row['email'] ?></td>
                <td><?php
                    if ($idfromcookie !== $row['id']) { 
                        echo "Unable to view";
                    } else {
                        echo '0' . $row['phone'];
                    }
                    ?>
                </td>
                <td><?= $row['tickets'] ?></td>
                </td>

                
                <td><?= $row['age'] ?></td>
                <td><?= $row['gender'] ?></td>
                <td><?= $row['country'] ?></td>
                <td><?= $row['university'] ?></td>
                <td><?= $row['college'] ?></td>
                <td><?= $row['major'] ?></td>
                <td><?= $row['levell'] ?></td>

                <td style="text-align: center"><?php
                if ($idfromcookie !== $row['id']) {
                    echo "";
                } else {
                    echo "<form action='delete.php' method='post'><button type='submit'>Delete</button></form>";
                }
                ?>
                </td>
                
            </tr>
            <br />
        <?php
        } ?>
        <tfoot>
            <tr>
                <td colspan="2" style="text-align: center"><?= mysqli_num_rows($result) ?> Users</td>
            </tr>
        </tfoot>
    </table>

    <br>
    <br>
    <button onclick="window.open('home.php','_self')">home</button>
</body>

</html>