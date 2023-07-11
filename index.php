<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="img/fav.png" />
    <title>Green Rescue</title>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

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
        padding: 20px 20px;
      
      }
      .box2 {
        width: 500px;
        height: 400px;
        border-radius: 10px;
        background: #fff;
        padding: 30px 20px;
        text-align:justify;
      }
      .box2 img{
        object-fit: cover;
        height:130px;
         width: 460px;
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
        height: max-content;
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
      .box4 a{
      
        margin: 0px 10px;
      float: right;
      color: #003329;
      font-size: 40px;
      }
      .box4 a:hover{
    color: #3bb78f;
    font-size: 42px;
    -webkit-transition: 0.5s;
         transition: 0.3s;


      
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

 

    
html {
  scroll-behavior: smooth;
}


.wrapper {
  width: 500px;

  background: #fff;
  border-radius: 16px;
  /* padding: 10px 20px 0px 20px ; */
  /* padding: 5px 20px 5px 20px; */
  box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.05);
  padding-top: 10px;


}
/* 
.wrapper main {
  height: 55px;
  width: 435px;
  display: flex;
  align-items: center;
  border: 1px solid #ccc;
  border-radius: 30px;
  position: relative;
  margin: 10px 25px;
  margin-bottom: 0px;

}

main label {
  height: 100%;
  z-index: 2;
  width: 50%;
  display: flex;
  cursor: pointer;
  font-size: 18px;
  position: relative;
  align-items: center;
  justify-content: center;
  transition: color 0.3s ease;
} */
main {
  height: 55px;
  width: 430px;
  display: flex;
  align-items: center;
  border: 1px solid #ccc;
  border-radius: 30px;
  position: relative;
  margin: 10px auto;
  margin-bottom: 0px;
}

.labels-container {
  flex: 1;
  display: flex;
  justify-content: space-between;
}

.labels-container label {
  flex: 1;
  display: flex;
  cursor: pointer;
  font-size: 18px;
  position: relative;
  align-items: center;
  justify-content: center;
  transition: color 0.3s ease;
}

.search-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 10px;
  cursor: pointer;
  font-size: 30px;
  color: #003329;
}
.search-icon:hover{
  
  font-size: 32px;
color: green;
-webkit-transition: 0.5s;
         transition: 0.2s;

}


/* 
#tab-1:checked~main .tab-1,
#tab-2:checked~main .tab-2,
#tab-3:checked~main .tab-3 {
  color: #fff;
}

main label:nth-child(2) {
  width: 40%;
}

main .slider {
  position: absolute;
  height: 85%;
  border-radius: inherit;
 background-color: #3bb78f;
background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 74%);
  transition: all 0.3s ease;
}

#tab-1:checked~main .slider {
  left: 5%;
  width: 150px;
  transform: translateX(5%);
}

#tab-2:checked~main .slider {
  left: 70%;
  width: 150px;
  transform: translateX(-50%);
} */

main label {
  height: 100%;
  z-index: 2;
  flex: 1;
  display: flex;
  cursor: pointer;
  font-size: 18px;
  position: relative;
  align-items: center;
  justify-content: center;
  transition: color 0.3s ease;
}

#tab-1:checked ~ main .tab-1,
#tab-2:checked ~ main .tab-2 {
  color: #fff;
}

.slider {
  position: absolute;
  height: 85%;
  border-radius: inherit;
  background-color: #3bb78f;
  background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 74%);
  transition: all 0.3s ease;
}

#tab-1:checked ~ main .slider {
  left: 1%;
  width: 200px;
  transform: translateX(0);
}

#tab-2:checked ~ main .slider {
  left: 45%;
  width: 190px;
  transform: translateX(0);
}


.wrapper input[type="radio"] {
  display: none;
}

.card-area {
  overflow: hidden;
}

.card-area .cards {
  display: flex;
  width: 300%;
}

.cards .row {
  width: 33.4%;
}

.cards .row-1 {
  transition: all 0.3s ease;
}

#tab-1:checked~.card-area .cards .row-1 {
  margin-left: 0.5%;
}

#tab-2:checked~.card-area .cards .row-1 {
  margin-left: -33.4%;
}






.row .features li {
  display: flex;
  font-size: 15px;
  list-style: none;
  margin-bottom: 10px;
  /* align-items: center; */
}

.features li i {
  background: linear-gradient(#D5A3FF 0%, #77A5F8 100%);
  background-clip: text;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.features li span {
  /* margin-left: 10px; */
}



.box {
  width: 480px;
  /* height: max-content; */
  /* border-radius: 10px; */
  /* background: #fff; */


}

.user {
  border-bottom: 1px solid rgba(128, 128, 128, 0.52);
  margin-bottom: 10px;


}

.row-fir {
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

/* team members */
.team {
  display: flex;
  flex-direction: column;
  padding: 5px 20px 5px 20px;

  font-weight: bolder;
 justify-content: center;
}

.member {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
  border-radius: 20px;
  /* box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; */
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
  /* box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px; */

}

.picture {
  margin-right: 10px;
  padding-left: 10px;
  margin-top: 5px;
  /* height: 50px; */
  border-radius: 50%;

  
}
.picture img{
        object-fit: cover;
        height: 55px;
  border-radius: 50%;
 

      }

.details {
  display: flex;
  flex-direction: column;
  margin-left: 20px;
}

.team_name {
  color: #000;
  font-size: 20px;
  font-weight: bold;
  letter-spacing: 1px;
}

.position {
  font-size: 14px;
  color: #1f5f5b;
}

a{
  text-decoration: none;
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
    <div class="wrapper">
    <input type="radio" name="slider" id="tab-1" checked>
    <input type="radio" name="slider" id="tab-2" >

    <!-- <main>
      <label for="tab-1" class="tab-1">Recent</label>
      <label for="tab-2" class="tab-2">Top</label>
      <a href="search.php">
      <img src="img/logo/search.png" alt="" height="20px">
      </a>

      <div class="slider"></div>
    </main> -->
    <main>
  <div class="labels-container">
    <label for="tab-1" class="tab-1">Recent</label>
    <label for="tab-2" class="tab-2">Top</label>
  </div>
  <a href="search.php" class="search-icon">
    <!-- <img src="img/logo/search.png" alt="" height="25px"> -->
    <ion-icon name="search"></ion-icon>
  </a>
  <div class="slider"></div>
</main>


    <div class="card-area">
      <div class="cards">
        <div class="row row-1">
         
          <ul class="features">
            <div class="box">
              
              
            <?php
      require_once 'C:\xampp\htdocs\greenrescue\connection.php';
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
                <div class="row-fir ">
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
      
          </ul>
        </div>

        <div class="row">
          
          <ul class="features">
          <div class="box">
              
              
            <?php
      require_once 'C:\xampp\htdocs\greenrescue\connection.php';
      $query = "select * from donator ORDER BY amount DESC limit 10";
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
                <div class="row-fir ">
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
          </ul>
        </div>
      
      </div>
    </div>
    <!-- <button>Choose plan</button> -->
  </div>


        <div class="right">  

        <?php
  require_once 'C:\xampp\htdocs\greenrescue\connection.php';
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
  <h1 class="head">Team Members</h1>
  <div class="team">
    <div class="member">
  
      <div class="picture"><img src="img/prabesh.jpg"  alt="" srcset=""></div>
      <div class="details">
        <div class="team_name">Prabesh Gupta</div>
        <div class="position">Developer</div>
    
      </div>
    </div>
    <div class="member">
    
      <div class="picture"><img src="img/prabin.jpg" alt="" srcset=""></div>
      <div class="details">
        <div class="team_name">Prabin Rai</div>
        <div class="position">Developer</div>
     
      </div>
    </div>
  
    <div class="member">
    
      <div class="picture"><img src="img/pratyush.jpg" alt="" srcset=""></div>
      <div class="details">
        <div class="team_name">Pratyush Kayastha</div>
        <div class="position">Developer</div>
       
      </div>
    </div>
        
  </div>
</div>

        <div class="box4">
       
          <div class= "social">
            Social
          <!-- <h1>Social Medias</h1> -->
  
            <a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://www.twitter.com/"><ion-icon name="logo-twitter"></ion-icon></a>
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
