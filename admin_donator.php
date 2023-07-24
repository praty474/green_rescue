<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    </style>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
        table {
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            /* border-radius: 10px;s */


        }


        .container {
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container1">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="leaf"></ion-icon></span>
                        <span class="title">Green Rescue</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbox-outline"></ion-icon></span>
                        <span class="title">Messages</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="top_bar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="user">
                    <img src="assets/img/admin.jpg" alt="user1" />
                </div>
            </div>

            <h1>Donator</h1>
            <div class="container">
                <div class="row header" style="text-align:center;color:green">

                </div>
                <table id="myTable" class="table table-striped" float="left">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Message</th>
                            <th>Date/Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'connection.php';
                        $query = "select * from donator ";
                        $stmt = mysqli_query($conn, $query);
                        if ($stmt) {
                            $sum = 0; // Initialize the sum variable
                            while ($row = mysqli_fetch_assoc($stmt)) {
                                $donator_id = $row['donator_id'];
                                $display_name = $row['display_name'];
                                $message = $row['message'];
                                $date = $row['date'];
                                $amount = $row['amount'];
                                $sum += $amount; // Add the amount to the sum variable
                        
                                echo '
        <tr>
         
           <td> ' . $donator_id . '</td> 
           <td> ' . $display_name . ' </td>
           <td>Rs ' . $amount . '</td>
           <td> ' . $message . '</td>
          <td> ' . $date . '</td>
         </tr>
        ';

                            }
                        }

                        ?>

                </table>
            </div>
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script src="assets/js/script.js"></script>
            <script>
                $(document).ready(function () {
                    $('#myTable').dataTable();
                });
            </script>
</body>

</html>