<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="description" content="Bootstrap.">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    </style>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
        #total {

            font-size: 20px;
            margin-bottom: 10px;
        }

        #sum {
            color: red;
        }

        #wrapper {
            width: 50%;
            margin: 20px auto;
            border: 2px solid #dad7d7;
            text-align: center;
        }

        form {
            width: 50%;
            margin: 20px auto;
        }

        form div {
            margin-top: 5px;
        }

        img {
            float: left;
            margin: 5px;
            width: 280px;
            height: 120px;
        }

        #img_div {
            width: 70%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #dad7d7;
        }

        #img_div:after {
            content: "";
            display: block;
            clear: both;
        }
    </style>
</head>

<body style="margin:20px auto">
    <div class="container">
        <div class="row header" style="text-align:center;color:green">
            <h1>Donator</h1>
        </div>
        <table id="myTable" class="table table-striped">
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
                <?php
                echo '
          <div id= "total"> Total Amount Collected: <span id="sum">Rs ' . $sum . '</span
          > </div>
        ';
                ?>
            </tbody>
        </table>
    </div>
    <div id="wrapper">
        <h2>Events</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="file" name="choosefile" value="" />
            <!-- <input type="text" name="description" placeholder="Enter description" /> Added input field for description -->
            <textarea name="description" placeholder="Enter description" id="" cols="60" rows="5"></textarea>
            <button type="submit" name="uploadfile">
                UPLOAD
            </button>
    </div>
    </form>
    </div>
</body>

<script>
    $(document).ready(function () {
        $('#myTable').dataTable();
    });
</script>

<?php
error_reporting(0);

$msg = "";

// check if the user has clicked the button "UPLOAD"
if (isset($_POST['uploadfile'])) {
    $filename = $_FILES["choosefile"]["name"];
    $tempname = $_FILES["choosefile"]["tmp_name"];
    $folder = "image/" . $filename;

    // Get the description value
    $description = $_POST['description'];

    // connect with the database
    $db = mysqli_connect("localhost", "root", "", "gr_db");

    // query to insert the submitted data
    $sql = "INSERT INTO image (filename, description) VALUES ('$filename', '$description')";

    // function to execute the above query
    mysqli_query($db, $sql);

    // Add the image to the "image" folder
    if (move_uploaded_file($tempname, $folder)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }
}

$result = mysqli_query($db, "SELECT * FROM image");
?>

</html>