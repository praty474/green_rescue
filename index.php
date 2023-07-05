<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="img/fav.png" />
    <title>Green Rescue</title>
    <link rel="stylesheet" href="style.css" />
    
    <style>
      .typewriter h1 {
        color: #fff;
        font-size: 80px;
        font-weight: 600;
        font-family: poppins;
        overflow: hidden;
        /* Ensures the content is not revealed until the animation */
        border-right: 0.1em solid green;
        /* The typwriter cursor */
        white-space: nowrap;
        /* Keeps the content on a single line */
        margin: 0 auto;
        /* Gives that scrolling effect as the typing happens */
        letter-spacing: 0.1em;
        margin-top: 10%;
        /* Adjust as needed */
        animation: typing 1.5s steps(12, end),
          blink-caret 0.7s step-end infinite;
      }

      /* The typing effect */
      @keyframes typing {
        from {
          width: 0;
        }

        to {
          width: 100%;
        }
      }

      /* The typewriter cursor effect */
      @keyframes blink-caret {
        from,
        to {
          border-color: transparent;
        }

        50% {
          /* border-color: green */
        }
      }
      
      .container {
        /* margin-top: 10%; */
        /* margin-left: 40%; */
        padding: 10px 100px 60px 100px;
        width: 100%;
        height: max-content;
        background: #003329;
        display: flex;
        /* align-items: center; */
        justify-content: center;
  
     
  
      }
      .box {
        width: 500px;
        height: max-content;
        border-radius: 10px;
        background: #fff;
        padding: 30px 20px;
      
      }
      .box2 {
        width: 500px;
        height: 400px;
        border-radius: 10px;
        background: #fff;
        padding: 30px 20px;
      }
      .box2 img{
        object-fit: cover;
        height:130px;
         width: 450px;
         border-radius: 10px;
         margin-bottom: 10px;
      }
      .event_desc{
     /* float:right; */
     color: green;
     height: 280px;
     width: 200px;
     
  }
      .box3 {
        width: 500px;
        height: 200px;
        border-radius: 10px;
        background: #fff;
        padding: 30px 20px;
        margin-top: 10px;
        font-size: 18px;
        
        

      }
      .team{
 
      display: flex;
        justify-content: space-between;
        padding:20px;
        list-style: none;    
        font-weight: bolder;
      }


         .box4 {
        width: 500px;
        height: max-content;
        border-radius: 10px;
        background: #fff;
        padding: 10px 20px;
        margin-top: 10px;
        font-size: 28px;
        font-weight: bolder;
color: #1f5f5b;
      }
      .box4 img{
        width: 40px;
        mix-blend-mode: normal;
        margin: 0px 10px;
      float: right;
      }
  
      
    
      .user {
        border-bottom: 1px solid rgba(128, 128, 128, 0.52);
        margin-bottom: 10px;
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
        font-size: 20px;
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
      .heading{
        margin: 10px 5px;
        margin-bottom: 15px;
        color:#1f5f5b;
        display: flex;
        justify-content: space-between;
        text-align:center;
      }
      .head{
        margin: 10px 5px;
        margin-bottom: 15px;
        color:#1f5f5b;
        /* display: flex;
        justify-content: space-between; */
        text-align:center;
      }
      .user {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 1s ease-in-out, transform 1s ease-in-out;
    }

    .user.reveal {
      opacity: 1;
      transform: translateY(0);
    }

    </style>
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>

  </head>

  <body>
    <header>
      <h2 class="logo"><img src="img/logo.png" alt="" height="80px" /></h2>
      <nav class="navigation">
        <a href="index.php" class="active">Home</a>
        <a href="#describe">Services</a>
        <a href="login.php">Login</a>
        <a href="payment.php">Donate</a>
        <a href="contact.html">Contact</a>
      </nav>
    </header>

    <section class="parallax">
      <img src="img/hill1.png" id="hill1" />
      <img src="img/hill2.png" id="hill2" />
      <img src="img/hill3.png" id="hill3" />
      <img src="img/hill4.png" id="hill4" />
      <img src="img/hill5.png" id="hill5" />
      <img src="img/tree.png" id="tree" />
      <!-- <h2 id="text">Green Rescue <br /></h2> -->
      <h2 id="text">
        <div class="typewriter">
          <h1>Green Rescue</h1>
          <br />
        </div>
      </h2>

      <h3 data-target="131200" class="count" id="nbr">0</h3>

      <img src="img/leaf.png" id="leaf" />
      <img src="img/plant.png" id="plant" />
    </section>

    <section class="describe" id="describe">
      <h2>Green Rescue Vision</h2>
      <p>
        At Green Rescue, we're all about bringing people closer to the
        environment and helping them understand why it's so important to protect
        it. We believe that when we work together, we can make our future
        greener. Our main goal is to inspire individuals and make them feel
        responsible for taking care of our planet. To achieve this, we aim to
        raise funds as a group for a greener future. By pooling our resources
        and combining our efforts, we can support projects that promote
        sustainability and eco-friendly practices. Whether it's projects for
        reforestation, adopting renewable energy, or reducing waste, every
        contribution counts and makes a real difference. <br /><br />

        Building a sustainable platform is one of our top priorities. We're
        committed to finding innovative solutions that tackle environmental
        challenges. This includes supporting sustainable technologies and
        businesses. Our aim is to create a platform that encourages and enables
        sustainable practices, ensuring that our impact lasts for a long time.
        <br /><br />

        Transparency is crucial to us, especially when it comes to donations. We
        want to make sure that everyone who supports us feels connected and
        informed about how their contributions are being used. That's why we
        regularly update our supporters through events and other channels,
        sharing all the details about the progress of our projects. By doing
        this, we build trust and show the impact we're making together.We take
        the security of our supporters' data seriously. We use strong encryption
        methods to protect all personal and financial information. This way, you
        can feel confident that your data is safe when you contribute to our
        cause. <br /><br />

        Join us at Green Rescue as we connect people to the environment, raise
        funds for a greener future, provide transparent updates, and build a
        sustainable platform. Together, we can make a lasting impact and create
        a better, greener world for everyone. <br /><br />
      </p>
    </section>
    <div class="container">
      <div class="box">
        <h1 class="heading">Recent <a href="search.php"><img src="img/logo/search.png" alt="" height="30px"></a></h1>
        
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
        </div>

        <div class="right">  

        <?php
  require_once 'connection.php';
  $imageQuery = "SELECT * FROM Image order by id desc limit 1";
  $imageResult = mysqli_query($conn, $imageQuery);
  if ($imageResult && mysqli_num_rows($imageResult) > 0) {
    $imageRow = mysqli_fetch_assoc($imageResult);
    $image = $imageRow['Filename'];
    $description = $imageRow['description'];
    
  }
?>

        <div class="box2">
  <h1 class="head">Events</h1>
  <?php
    if (isset($image) && isset($description)) {
      
        echo '<img src="image/'.$image.'" >';

        echo'<span class="event_desc">' . $description . '</span>';

         }
    ?>
       
   
   
    
</div>

        <div class="box3">
          <h1 class= "head">Team Members</h1>
            <!-- <img src="img/hill1.png" alt="" height="100px"> -->
            <div class="team "> 
              <li>Prabesh</li>
              <li>Prabin</li>
              <li>Pratyush</li>
          </div>
    
        </div>
        <div class="box4">
       
          <div class= "social">
            Social
          <!-- <h1>Social Medias</h1> -->
            <a href="http://facebook.com" ><img src="img/logo/fb.png" alt=""></a>
            <a href="http://instagram.com" ><img src="img/logo/ig.png" alt=""></a>
            <a href="http://twitter.com" ><img src="img/logo/twitter.png" alt=""></a>
    </div>
            <!-- <img src="img/hill1.png" alt="" height="100px"> -->
        </div>
      </div>
      
        
      
      </div>
    </div>

    <footer>
      <p>Copyright &copy;2023 Green Rescue</p>
    </footer>

    <script src="script.js"></script>
    <script>
      const counters = document.querySelectorAll(".count");
      const speed = 200;

      counters.forEach((counter) => {
        const updateCount = () => {
          const target = parseInt(+counter.getAttribute("data-target"));
          const count = parseInt(+counter.innerText);
          const increment = Math.trunc(target / speed);
          console.log(increment);

          if (count < target) {
            counter.innerText = count + increment;
            setTimeout(updateCount, 1);
          } else {
            count.innerText = target;
          }
        };
        updateCount();
      });
      window.addEventListener("scroll", () => {
        let value = window.scrollY;
        nbr.style.marginTop = value * 1.5 + "px";
      });

     //user

// JavaScript code to reveal "user" class on scroll all at once
const userElements = document.querySelectorAll('.user');

const revealUser = () => {
  userElements.forEach((userElement) => {
    if (isElementInViewport(userElement)) {
      userElement.classList.add('reveal');
    }
  });
};

const isElementInViewport = (element) => {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};

window.addEventListener('scroll', revealUser);
window.addEventListener('resize', revealUser);
revealUser(); // Call once on initial load

    </script>
  </body>
</html>
