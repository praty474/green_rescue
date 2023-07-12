
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Donate</title>
    <link rel="icon" type="image/x-icon" href="img/fav.png" />
    <link rel="stylesheet" href="payment.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/give/2.11.0/js/give.min.js"></script>
    <style>
           input[type="radio"],
      input[type="email"] {
        display: none;
      }

      .radio-option {
        display: inline-block;
        margin-right: 10px;
      }

      .radio-option label {
        display: block;
        background-color: #f1f1f1;
        color: #333;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 4px;
      }

      .radio-option label:hover {
        background-color: #e0e0e0;
      }

      .radio-option input[type="radio"]:checked + label {
        background-color: #4caf50;
        color: white;
      }

      #give-custom-amount {
        display: none;
      }

      input[type="text"],
      input[type="email"],
      input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
      }

      input[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="header">
      <h2 class="logo"><img src="img/logo.png" alt="" height="80px" /></h2>
      <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="#">Services</a>
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
          <div class="radio-option">
        <input
          type="radio"
          id="give-amount-100"
          name="amount"
          value="100"
          checked
        />
        <label for="give-amount-100">$100</label>
      </div>

      <div class="radio-option">
        <input
          type="radio"
          id="give-amount-250"
          name="amount"
          value="250"
        />
        <label for="give-amount-250">$250</label>
      </div>

      <div class="radio-option">
        <input
          type="radio"
          id="give-amount-500"
          name="amount"
          value="500"
        />
        <label for="give-amount-500">$500</label>
      </div>

      <div class="radio-option">
        <input
          type="radio"
          id="give-amount-750"
          name="amount"
          value="750"
        />
        <label for="give-amount-750">$750</label>
      </div>

      <div class="radio-option">
        <input
          type="radio"
          id="give-amount-custom"
          name="amount"
          value="custom"
        />
        <label for="give-amount-custom">Custom Amount</label>
        <input
          type="text"
          id="give-custom-amount"
          name="amount"
          placeholder="Enter Custom Amount"
          style="display: none"
        />
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
              <input type="email" name= "email" />
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
              <input
                type="text"
                maxlength="16"
                id="card_num"
                minlength="16"
                required
              />
            </div>
            <div class="field">
              <div class="label">Expiry</div>
              <input
                name="credit-expires"
                class="cc-expires"
                type="tel"
                pattern="\d*"
                placeholder="MM/YY"
                maxlength="4"
                minlength="4"
                required
              />

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

    <script src="payment.js"></script>
    <script>
        jQuery(function ($) {
        $("#give-amount-custom").click(function () {
          $("#give-custom-amount").show();
        });

        $(
          "#give-amount-100, #give-amount-250, #give-amount-500, #give-amount-750"
        ).click(function () {
          $("#give-custom-amount").hide();
        });

        $("#donation-form").submit(function (e) {
          e.preventDefault();

          var amount = $('input[name="amount"]:checked').val();
          var firstName = $("#give-firstname").val();
          var lastName = $("#give-lastname").val();
          var email = $("#give-email").val();

          if (amount === "custom") {
            amount = $("#give-custom-amount").val();
          }

          var donationData = {
            amount: amount,
            first_name: firstName,
            last_name: lastName,
            email: email,
          };

          give.processDonation(donationData);
        });
      });
    </script>

  </body>
</html>
