<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "careplan";

    $conn = new mysqli($servername,$username,$password,$dbname) or die('oops!');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Care Plan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>
<?php
    if(isset($_GET['delete']))
    {
        $start = isset($_GET['delete']) ? intval($_GET['delete']) : 1;
        $counttime = 9;
        
        for ($i = 0; $i < $counttime; $i++) {
            $value = $start + $i;
            $numbers[] = $value;
        }
        $ids_to_delete = implode(",", $numbers);

        // Delete query
        $sql = "DELETE FROM user_responses WHERE question IN ($ids_to_delete)";

        // Execute the delete query
        if ($conn->query($sql) === TRUE) {
            $success = true;
        } else {
            echo "Error deleting rows: " . $conn->error;
        }
    }
?>

    <?php
        if(isset($_GET['delete'])):
    ?>
    <div class="alert alert-danger">
        Record Deleted Successfully <b>please click here to refresh page <a href="showdata.php">Refresh Page</a></b>
    </div>
    <?php
        endif;
    ?>
    <table class="table">
        <tr>
            <th>About Me</th>
            <th>Client's Desired Goals and Outcomes?</th>
            <th>Client have Cognitive Impairment?</th>
            <th>Client's Personal Care Needs?</th>
            <th>Client have Continence Care Needs ?</th>
            <th>Client's Mobility Care Needs ?</th>
            <th>Client's Meal Requirements ?</th>
            <th>Client's Medication Support Requirements ?</th>
            <th>Client Advance Support Requirements ?</th>
            <th>Action</th>
        </tr>
        <?php
            $data = array();
            $fetch = $conn->query("SELECT * FROM user_responses");
            while ($row = $fetch->fetch_assoc()) {
                $data[] = $row;
            }
            $total_rows = count($data);
            $num_rows_per_column = 9;

            for ($i = 0; $i < $total_rows; $i += $num_rows_per_column) {
                echo "<tr>";
                for ($j = 0; $j < $num_rows_per_column; $j++) {
                    $index = $i + $j;
                    if ($index >= $total_rows) {
                        // If there are not enough rows to fill an entire column of 8 rows, fill the remaining cells with empty cells
                        echo "<td></td>";
                    } else {
                        echo "<td>" . $data[$index]['generated_response'] . "</td>";
                    }
                }
                $deletid = $data[$i]['question'];
                echo "<td><a href='showdata.php?delete=$deletid'>Delete</a></td>";

                echo "</tr>";
            }
        ?>
</table>
</body>
</html>