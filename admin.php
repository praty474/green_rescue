<?php
require_once 'connection.php';
$query = "SELECT * FROM donator";

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
  }
}

// Calculate today's donation
$today = date('Y-m-d');
$queryToday = "SELECT SUM(amount) AS today_donation FROM donator WHERE DATE(date) = CURDATE()";
$resultToday = mysqli_query($conn, $queryToday);
$todayDonation = mysqli_fetch_assoc($resultToday)['today_donation'];

function total_user()
{
  global $conn;
  $sql = "SELECT COUNT(*) FROM donator";
  if ($result = mysqli_query($conn, $sql)) {
    $row = mysqli_fetch_array($result);
    $rowcount = $row[0];
    mysqli_free_result($result);
  }
  return $rowcount;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <div class="container">
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
        <div class="search">
          <label for="search">
            <input type="text" name="search" id="search" placeholder="Search Here" />
            <ion-icon name="search-outline"></ion-icon>
          </label>
        </div>
        <div class="user">
          <img src="assets/img/admin.jpg" alt="user1" />
        </div>
      </div>

      <div class="cardBox">
        <div class="card">
          <div>
            <div class="numbers">1010</div>
            <div class="cardName">Memebers</div>
          </div>
          <div class="iconBx">
            <ion-icon name="people-outline"></ion-icon>
          </div>
        </div>

        <div class="card">
          <div>
            <div class="numbers">
              <?php echo total_user(); ?>
            </div>
            <div class="cardName">Total Donars</div>
          </div>
          <div class="iconBx">
            <ion-icon name="person-add-outline"></ion-icon>
          </div>
        </div>

        <div class="card">
          <div>
            <div class="numbers">
              <?php echo 'Rs ' . $todayDonation; ?>
            </div>
            <div class="cardName">Today Donation</div>
          </div>
          <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
          </div>
        </div>

        <div class="card">
          <div>
            <div class="numbers">Rs
              <?php
              echo '' . $sum . '';
              ?>
            </div>
            <div class="cardName">Total Donation</div>
          </div>
          <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
          </div>
        </div>
      </div>

      <div class="details">
        <div class="recentDonation">
          <div class="cardHeader">
            <h2>Recent Donations</h2>
            <a href="#" class="viewAll">View All</a>
          </div>

          <table>
            <thead>
              <tr>
                <td>Donar Name</td>
                <td>Amount</td>
                <td>Date</td>
                <td>Payment Method</td>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Prabesh Gupta</td>
                <td>Rs 100</td>
                <td>06 Jul 2023</td>
                <td><span class="method stripe">Card</span></td>
              </tr>
              <tr>
                <td>Ayush Gupta</td>
                <td>Rs 250</td>
                <td>06 Jul 2023</td>
                <td><span class="method khalti">Khalti</span></td>
              </tr>
              <tr>
                <td>Jay Prakash Gupta</td>
                <td>Rs 400</td>
                <td>06 Jul 2023</td>
                <td><span class="method khalti">Khalti</span></td>
              </tr>
              <tr>
                <td>Sanu Gupta</td>
                <td>Rs 260</td>
                <td>05 Jul 2023</td>
                <td><span class="method stripe">Card</span></td>
              </tr>
              <tr>
                <td>Prabin Rai</td>
                <td>Rs 500</td>
                <td>05 Jul 2023</td>
                <td><span class="method stripe">Card</span></td>
              </tr>
              <tr>
                <td>Pratyush Kyastha</td>
                <td>Rs 400</td>
                <td>05 Jul 2023</td>
                <td><span class="method khalti">Khalti</span></td>
              </tr>
              <tr>
                <td>Balen Shah</td>
                <td>Rs 1000</td>
                <td>04 Jul 2023</td>
                <td><span class="method khalti">Khalti</span></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="recentMembers">
          <div class="cardHeader">
            <h2>Recent Members</h2>
          </div>

          <table>
            <tr>
              <td width="60px">
                <div class="imgBx">
                  <img src="assets/img/admin.jpg" alt="" />
                </div>
              </td>
              <td>
                <h4>Prabesh Gupta<br /><span>@prabesh</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgBx"><img src="assets/img/1.png" alt="" /></div>
              </td>
              <td>
                <h4>Harry Nostyle<br /><span>@harryop</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgBx"><img src="assets/img/2.png" alt="" /></div>
              </td>
              <td>
                <h4>Minato Uzumaki<br /><span>@sonnaruto</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgBx"><img src="assets/img/3.png" alt="" /></div>
              </td>
              <td>
                <h4>Saurabh Einstime<br /><span>@suarav</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgBx"><img src="assets/img/4.png" alt="" /></div>
              </td>
              <td>
                <h4>Upahar Tamang<br /><span>@upahar2023</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="imgBx">
                  <img src="assets/img/5.jpeg" alt="" />
                </div>
              </td>
              <td>
                <h4>Shradha Karki<br /><span>@queenshradha</span></h4>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>