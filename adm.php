<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="icon" type="image/x-icon" href="img/fav.png" />
</head>
<body>
    <h1>Payment Details</h1>
     <a href="admin.php">Search</a>
    <table width="70%" border=1>
        <th>Id</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Message</th>
        <th>Date/Time</th>

    <?php
        require_once 'connection.php';
        $query = "SELECT * FROM donator";
        $stmt = mysqli_query($conn, $query);
        $sum = 0; // Initialize the sum variable

        if ($stmt) {
            while ($row = mysqli_fetch_assoc($stmt)) {
                $donator_id = $row['donator_id'];
                $display_name = $row['display_name'];
                $message = $row['message'];
                $date = $row['date'];
                $amount = $row['amount'];
                $sum += $amount; // Add the amount to the sum variable

                echo '<tr>
                    <td>'.$donator_id.'</td>
                    <td><div class="name">'.$display_name.'</div></td>
                    <td><div class="amount"><div class="amt">Rs '.$amount.'</div></div></td>
                    <td><div class="message">'.$message.'</div></td>
                    <td><div class="date">'.$date.'</div></td>
                </tr>';
            }
        }
        
        echo '<tr>
            <td colspan="5">Total Amount Collected: Rs '.$sum.'</td>
        </tr>';
    ?>      
    </table>
</body>
</html>
