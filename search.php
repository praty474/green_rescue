<?php
if (isset($_POST['search'])) {
  $valueToSearch = $_POST['valueToSearch'];
  // search in all table columns
  // using concat mysql function
  // $query = "SELECT * FROM `donator` WHERE CONCAT(`donator_id`, `display_name`, `message`, `date` , `amount`) LIKE '%".$valueToSearch."%'";   

  $query = "SELECT * FROM `donator` WHERE CONCAT(`display_name`) LIKE '%" . $valueToSearch . "%'";
  $search_result = filterTable($query);
  if (mysqli_num_rows($search_result) == 0) {
    // echo '<script>alert("No data found.");</script>';
    $yourURL = "search.php";
    echo ("<script>location.href='$yourURL'</script>");
  }
} else {
  $query = "SELECT * FROM `donator` limit 0";
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
  <title>Green Rescue
  </title>
  <style>
    * {
      font-family: "Poppins", sans-serif;
      /* margin: 5px; */
    }

    body {
      /* background-color: #204b9e;
            background-image: linear-gradient(180deg, #204b9e 0%, #0d9830 100%); */
      height: 100%;
      margin: 0;
      background-repeat: no-repeat;
      background-attachment: fixed;
    }


    body:before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;

      z-index: -1;
    }

    .bg-img {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    th {
      background: navy;
      color: #fff;
      font-size: 18px;
    }

    .container {
      text-align: center;
      align-items: center;
      margin: 20px;

    }

    .input {
      width: 40%;
      height: 30px;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
      padding: 5px;
      background: #fafafb;
      margin: 0;
      border: 2px solid #fafafb;
      text-transform: uppercase;
      padding-left: 20px;
    }


    .search {
      width: 10%;
      height: 44px;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
      padding: 5px;
      background: #fafafb;
      margin: -5px;
      border: none;
      margin-bottom: 10px;



    }

    .user {
      border-bottom: 1px solid rgba(128, 128, 128, 0.52);
      margin-bottom: 10px;
      background: #fff;
      width: 50%;
      padding: 5px;
      border-radius: 10px;


    }

    .row {
      display: flex;
      justify-content: space-between;
      margin: 10px 5px;


    }

    .row2 {
      display: flex;
      justify-content: space-between;
      margin: 10px 5px;

    }

    .name {
      color: #358391;
      font-size: 22px;
      font-weight: 600;

    }

    .message {
      font-size: 14px;
      max-width: 280px;


    }

    .amt {
      background: #1f5f5b;
      color: white;
      padding: 2px 4px;
      border-radius: 5px;
      text-align: center;
      justify-content: center;
    }

    .date {
      font-size: 11px;
    }

    input[type=text] {

      -webkit-transition: 0.5s;
      transition: 0.3s;
      outline: none;
    }

    input[type=text]:focus {
      border: 3px solid lightblue;
    }


    .search:hover {
      background: lightblue;
      -webkit-transition: 0.5s;
      transition: 1.5s;
    }

    .heading {
      color: #1f5f5b;
      font-weight: 900;

    }

    #quote {
      color: #1f5f5b;

    }



    .back-button {
      display: flex;
      align-items: center;
      margin-top: 10px;
      margin-left: 10px;
    }

    .back {
      display: inline-block;
      height: 20px;
      width: 80px;
      background: lightgray;
      font-size: 20px;
      font-weight: 600;
      text-decoration: none;
      border-radius: 20px;
      padding: 10px 8px;
      color: #1f5f5b;
      text-align: center;
      align-items: center;
      display: flex;
    }




    .arrow {
      font-size: 30px;
      margin-right: 5px;
    }



    .back:hover {
      background: #000000;
      /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #0f9b0f, #000000);
      /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #0f9b0f, #000000);
      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


      color: white;
      -webkit-transition: 0.5s;
      transition: 1s;
    }

    .logo {
      margin: 0 auto;
      display: block;
    }

    .toast {
      visibility: hidden;
      min-width: 250px;
      margin-left: -125px;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 5px;
      padding: 16px;
      position: fixed;
      z-index: 1;
      left: 50%;
      bottom: 30px;
      font-size: 17px;
    }

    .show-toast {
      visibility: visible;
      -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
      animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
      from {
        bottom: 0;
        opacity: 0;
      }

      to {
        bottom: 30px;
        opacity: 1;
      }
    }

    @keyframes fadein {
      from {
        bottom: 0;
        opacity: 0;
      }

      to {
        bottom: 30px;
        opacity: 1;
      }
    }

    @-webkit-keyframes fadeout {
      from {
        bottom: 30px;
        opacity: 1;
      }

      to {
        bottom: 0;
        opacity: 0;
      }
    }

    @keyframes fadeout {
      from {
        bottom: 30px;
        opacity: 1;
      }

      to {
        bottom: 0;
        opacity: 0;
      }
    }
  </style>
  <script>
    function validateInput() {
      var input = document.getElementById("searchInput").value;

      if (input.length < 3) {
        alert("Input must have at least three characters");
        return false;
      }
      return true;
    }
  </script>
  <link rel="icon" type="image/x-icon" href="img/fav.png" />

</head>

<body>

  <div class="back-button">
    <a class="back " href="index.php">
      <ion-icon class="arrow" name="arrow-back"></ion-icon>
      <span>Back</span>
    </a>
  </div>

  <img src="img/plant.png" alt="" class="bg-img">
  <img src="img/5330558.jpg" alt="" class="bg-img">


  <div class="container">
    <img src="img/logo.png" alt="" height="100px" class="logo">
    <h1 class="heading">DONOR SEARCH</h1>
    <p id="quote">“A fool sees not the same tree that a wise man sees.” <br>-William Blake</p>
    <form action="search.php" method="post" onsubmit="return validateInput();">

      <input type="text" name="valueToSearch" class="input" placeholder="Search Name" id="searchInput">
      <input type="submit" name="search" class="search " value="Search">

  </div>






  <center>


    <?php
    require_once 'connection.php';
    $stmt = mysqli_query($conn, $query);
    if ($stmt) {
      while ($row = mysqli_fetch_assoc($stmt)) {
        $donator_id[] = $row['donator_id'];
        $display_name = $row['display_name'];
        $message = $row['message'];
        $date = $row['date'];
        $amount = $row['amount'];

        echo '
        <div class="user">
          <div class="row ">
            <div class="name "> ' . $display_name . '</div>
            <div class="amount"><div class="amt"> Rs ' . $amount . '</div></div>
          </div>
          <div class="row2 ">
            <div class="message "> ' . $message . '</div>
            <div class="date  ">  ' . $date . '</div>
          </div>
        </div>';

      }
    }

    ?>

    </form>

  </center>
  </div>
  <div class="toast" id="toast">
    No data found.
  </div>

</body>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<script>
  // Function to show the toast message
  function showToast() {
    var toast = document.getElementById("toast");
    toast.className = "toast show-toast";

    // Hide the toast after 3 seconds (3000 milliseconds)
    setTimeout(function () {
      toast.className = toast.className.replace("show-toast", "");
    }, 3000);
  }

  // Check if search result is empty and show toast if true
  <?php
  if (mysqli_num_rows($search_result) == 0) {
    echo 'showToast();';
  }
  ?>

</script>

</html>