
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
        <title>Admin
        </title>
        <style>
        * {
            font-family: "Poppins", sans-serif;
            /* margin: 5px; */
        }

        body {
            background-color: #204b9e;
            background-image: linear-gradient(180deg, #204b9e 0%, #0d9830 100%);
            height: 100%;
            margin: 0;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Add the following CSS for wave background */
        body:before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('wave.png') repeat-x; /* Replace 'wave.png' with the path to your wave image */
            z-index: -1;
        }

        /* Rest of your CSS styles */
        /* ... */

        /* Add the following CSS for the leaf image */
        .bg-img {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

            th{
                background: navy;
                color:#fff;
                font-size: 18px;
            }
            .container{
                text-align:center;
                align-items:center;
                margin: 20px;
               
            }
            
          .input{
            width: 40%;
            height: 30px;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            padding: 5px;
            background: lightgray;
            margin: 0;
            border:2px solid lightgray;
          }
        

 .search{
            width: 10%;
            height: 44px;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            padding: 5px;
            background: lightgray;
            margin: -5px;
            border:none;
            margin-bottom:10px;
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
        color:  #358391;
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
        font-size: 11px;}
          .search:hover{
            background: gray;
          }
          .heading{
            color: #1f5f5b;
            font-weight: 900;

          }
          #quote{
            color: #1f5f5b;
        
          }
 
          .back-button {
            float: left; /* Float the Back button to the left */
            margin-top: 10px; /* Adjust the top margin as needed */
            margin-left: 10px;
        }

        .back {
            display: inline-block; /* Make the Back button inline-block */
            height: 20px;
            width: 50px;
            background: lightgray;
            font-size: 20px;
            font-weight: 600;
            text-decoration: none;
            border-radius:15px;
            padding: 10px 5px;
            color:#1f5f5b;}

        .back:hover{
          background: darkgreen;
          color:white;
        }
.logo{
  margin-left: -50px;
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
    </head>
    <body >
    <div class="back-button">
            <a class="back" href="index.php">Back</a>
          </div>
          
         <img src="img/plant.png" alt="" class="bg-img">
         <img src="img/5330558.jpg" alt="" class="bg-img">
      

        <div class="container">
          <img src="img/logo.png" alt="" height="100px" class="logo">
        <h1 class="heading">DONOR SEARCH</h1>
        <p id="quote">“A fool sees not the same tree that a wise man sees.” <br>-William Blake</p>
        <form action="search.php" method="post" onsubmit="return validateInput();" >

            <input type="text" name="valueToSearch" class="input" placeholder="Search Name" id="searchInput"> 
            <input type="submit" name="search" class="search" value="Search">
           
     
           <!-- <br><br> -->
     
           
     
      <center>

      <!-- populate table from mysql database -->
      <!-- populate table from mysql database -->
            
                    <?php
                    require_once 'connection.php';
                    $stmt = mysqli_query($conn,$query);
            if($stmt){
              while($row = mysqli_fetch_assoc($stmt)){
                  $donator_id[] = $row['donator_id'];
                  $display_name = $row['display_name'];
                  $message = $row['message'];
                  $date = $row['date'];
                  $amount = $row['amount'];

      echo'
        <div class="user">
          <div class="row ">
            <div class="name "> '.$display_name.'</div>
            <div class="amount"><div class="amt"> Rs '.$amount.'</div></div>
          </div>
          <div class="row2 ">
            <div class="message "> '.$message.'</div>
            <div class="date  ">  '.$date.'</div>
          </div>
        </div>';
     
      }}
     
      ?>      
            
        </form>
    
    </center>
            </div>
    </body>
</html>
