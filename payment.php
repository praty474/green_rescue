<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8" />
  <title>Green Rescue</title>
  <link rel="icon" type="image/x-icon" href="img/fav.png" />
  <!-- <link rel="stylesheet" href="payment.css" /> -->
  <link rel="stylesheet" href="donate.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/give/2.11.0/js/give.min.js"></script>

</head>

<body>
  <div class="header">
    <h2 class="logo"><img src="img/logo.png" alt="" height="80px" /></h2>
    <nav class="navigation">
      <a href="index.php">Home</a>
      <a href="index.php#describe">Services</a>
      <a href="login.php">Login</a>
      <a href="payment.php" class="active">Donate</a>
      <a href="contact.html">Contact</a>
    </nav>
  </div>

  <div class="container">
    <header>Payment</header>
    <div class="progress-bar">
      <div class="step">
        <p>Amount</p>
        <div class="bullet">
          <span>1</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
      <div class="step">
        <p>Details</p>
        <div class="bullet">
          <span>2</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
      <div class="step">
        <p>Payment</p>
        <div class="bullet">
          <span>3</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
      <div class="step">
        <p>Submit</p>
        <div class="bullet">
          <span>4</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
    </div>
    <div class="form-outer">
      <form action="#" method="POST">
        <div class="page slide-page">
          <div class="select_amt">
            <div class="radio-option">
              <input type="radio" id="give-amount-100" name="amount" value="100" />
              <label for="give-amount-100">Rs 100</label>
            </div>

            <div class="radio-option">
              <input type="radio" id="give-amount-250" name="amount" value="250" checked />
              <label for="give-amount-250">Rs 250</label>
            </div>

            <div class="radio-option">
              <input type="radio" id="give-amount-500" name="amount" value="500" />
              <label for="give-amount-500">Rs 500</label>
            </div>

            <div class="radio-option">
              <input type="radio" id="give-amount-750" name="amount" value="750" />
              <label for="give-amount-750">Rs 750</label>
            </div>

            <div class="radio-option">
              <!-- <input
          type="radio"
          id="give-amount-custom"
          name="amount"
          value="custom"
        />
        <label for="give-amount-custom">Custom Amount</label> -->
              <input type="text" id="custom-amount" name="amount" placeholder="Other Amount" />
              <!-- style="display: none" -->
            </div>
          </div>
          <!-- <div class="field">
           
              <input type="text" />
            </div> -->
          <div class="field">
            <button class="firstNext next">Next</button>
          </div>
        </div>

        <div class="page">
          <div class="title">Details</div>
          <div class="field">
            <div class="label">Name</div>
            <input type="text" name="display_name" />
          </div>
          <div class="field">
            <div class="label">Email Address</div>
            <input type="email" name="email" />
          </div>
          <div class="field">
            <div class="label">Message</div>
            <!-- <input type="textarea" name= "message" maxlength="60"/> -->
            <textarea name="message" id="message" row="2" cols="55" maxlength="60" style="  
              border-radius: 5px;
             border: 1px solid lightgray;
             padding-left: 15px;
 "></textarea>

          </div>
          <div class="field btns">
            <button class="prev-1 prev">Previous</button>
            <button class="next-1 next">Next</button>
          </div>
        </div>

        <div class="page">
          <div class="title">Payment Details</div>
          <div class="field">
            <div class="label">Name on card</div>
            <input type="text" required />
          </div>
          <div class="field">
            <div class="label">Card Number</div>
            <input type="text" maxlength="16" id="card_num" minlength="16" required />
          </div>
          <div class="field">
            <div class="label">Expiry</div>
            <input name="credit-expires" class="cc-expires" type="tel" pattern="\d*" placeholder="MM/YY" maxlength="4"
              minlength="4" required />

            <div class="label" id="cvv">CVV</div>
            <input type="password" maxlength="3" minlength="3" required />
          </div>

          <div class="field btns">
            <button class="prev-2 prev">Previous</button>
            <button class="next-2 next">Next</button>
          </div>
        </div>

        <div class="page">
          <div class="title">Submit</div>
          <div class="field">
            <div class="label">Confirm and Submit</div>
          </div>

          <div class="field btns">
            <button class="prev-3 prev">Previous</button>
            <button class="submit" name="submit">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="donate.js"></script>
  <script>


  </script>

</body>

</html>