<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `donator` WHERE CONCAT(`donator_id`, `display_name`, `message`, `date` , `amount`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `donator`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "gr_db");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="admin.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
           
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Amount</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php 
                   $sum = 0; // Initialize the sum variable
                while($row = mysqli_fetch_array($search_result)):
               

                                $amount = $row['amount'];
                                $sum += $amount; // Add the amount to the sum variable

                    ?>
                    
                <tr>
                    <td><?php echo $row['donator_id'];?></td>
                    <td><?php echo $row['display_name'];?></td>
                    <td><?php echo $row['message'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['amount'];?></td>
                </tr>
                <?php endwhile; ?>
            </table>
        </form>
        <?php
            echo '<tr>
            <td colspan="5">Total Amount Collected: Rs '.$sum.'</td>
        </tr>';
            ?>
    </body>
</html>
