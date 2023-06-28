
            
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>donation</title>
    <style>
      body {
        background: green;
        font-family: "Poppins", sans-serif;
      }
      .container {
        /* margin-top: 10%; */
        /* margin-left: 40%; */
        padding: 60px 400px;
        width: 100%;
      }
      .box {
        width: 400px;
        height: max-content;
        border-radius: 10px;
        background: #fff;
        padding: 30px 20px;
      }
      .user {
        border-bottom: 1px solid rgba(128, 128, 128, 0.52);
        margin-bottom: 10px;
      }

      .row {
        display: flex;
        justify-content: space-between;
        margin: 10px 5px ;
      }

      .row2 {
        display: flex;
        justify-content: space-between;
        margin: 10px 5px;
      }
      .name {
        color: #159947;
        font-size: 20px;
        font-weight: 600;
      }
      .message {
        font-size: 14px;
        max-width: 200px;
        
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
    </style>
  </head>
  <body>
    <div class="container">
      <div class="box">
 
      <?php
require_once 'connection.php';
$query = "select * from donator ORDER BY donator_id DESC limit 10";
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
          <div class="row">
            <div class="name"> '.$display_name.'</div>
            <div class="amount"><div class="amt"> Rs '.$amount.'</div></div>
          </div>
          <div class="row2">
            <div class="message"> '.$message.'</div>
            <div class="date">  '.$date.'</div>
          </div>
        </div>';
     
      }}
     
      ?>      
       
        </div>
      </div>
    </div>
  </body>
</html>
