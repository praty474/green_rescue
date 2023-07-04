<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    // $query = "SELECT * FROM `donator` WHERE CONCAT(`donator_id`, `display_name`, `message`, `date` , `amount`) LIKE '%".$valueToSearch."%'";   

     $query = "SELECT * FROM `donator` WHERE CONCAT(`display_name`) LIKE '%".$valueToSearch."%'";
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
        <title>Admin
        </title>
        <style>
       
            th{
                background: navy;
                color:#fff;
                font-size: 18px;
            }
            .container{
                text-align:center;
                align-items:center;
            }
            table{
                margin-left: auto;
  margin-right: auto;
  width: 70%;
  text-align:left;
            }
            tr:nth-child(even) {background-color: #f2f2f2;}
          
        </style>
    </head>
    <body>
        <div class="container">
        <h1>Donator List</h1>
        
        <form action="admin.php" method="post">
            <label for="valueToSearch">Search</label>
            <input type="text" name="valueToSearch" placeholder="Search Name">
            <input type="submit" name="search" value="Search"><br><br>
           
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
            <div class="events">
                <h1>Events</h1>
                <form action="post">
                <Label>Image</Label>
                <input type="file" src="" alt="">  <br>
                <Label>Description</Label>
                <textarea name="desc" id="" cols="30" rows="2"></textarea>
                <input type="submit" value="submit">
                </form>
            </div>
            </div>
    </body>
</html>
