
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
            color: #fff;
            font-weight: 900;

          }
          #quote{
            color: #fff;
        
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
    <body bgcolor=#003329>
        <div class="container">
          <img src="img/logo.png" alt="" height="100px">
        <h1 class="heading">DONOR SEARCH</h1>
        <p id="quote">“A fool sees not the same tree that a wise man sees.” <br>-William Blake</p>
        <form action="search.php" method="post" onsubmit="return validateInput();" >

            <input type="text" name="valueToSearch" class="input" placeholder="Search Name" id="searchInput"> 
            <input type="submit" name="search" class="search" value="Search">
           

           <br><br>
           
     
      <center>

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
