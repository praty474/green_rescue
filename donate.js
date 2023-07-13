const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnSec.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnThird.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
submitBtn.addEventListener("click", function () {
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  setTimeout(function () {
    alert("Payment Successful");
    location.reload();
  }, 800);
  //here only
});

prevBtnSec.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function (event) {
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});

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

// Get the radio buttons and input field
const radioButtons = document.querySelectorAll('input[type="radio"]');
const inputField = document.getElementById("custom-amount");

// Add event listener for input field focus
inputField.addEventListener("focus", function () {
  // Uncheck all radio buttons
  radioButtons.forEach(function (button) {
    button.checked = false;
  });
});
